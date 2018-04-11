// Dependencies
const fetch = require('node-fetch')
const mysql = require('promise-mysql')

// Prepare requests
const apiUrl = 'http://superheroapi.com/api/'
const noImage = 'http://www.superherodb.com/pictures/portraits/no-portrait.jpg'

let results = []

const scrapeData = async connection => {
  for (let i=1; i<731; i++) {
    const request = `${apiUrl}1392776330826904/${i}`
    let response

    try {
      response = await fetch(request)
      response = await response.json()
    } catch(error) {
      console.log(error)
    }

    // Only save if request was successful
    if (response && response.response === 'success') {
      // Get all ratings in array
      let ratings = Object.values(response.powerstats)
      // Convert all ratings to int
      ratings = ratings.map(rating => parseInt(rating))
      // Calculate average
      const average = Math.round(
        ratings.reduce((total, rating) => total + rating) / ratings.length
      )

      // Only save if all ratings are set and average is good
      if (isNaN(average) || average < 35 || response.image.url === noImage) {
        console.log('not worth keeping')
      } else {
        // Only save relevant data
        const saved = (
          ({ id, name, powerstats, image: {url} }) => ({ id, name, powerstats, image: {url} })
        )(response)

        // Prepare database update
        const sqlInsert = `
          INSERT INTO heroes (
            hero_id, hero_name, average, intelligence, strength, speed, durability, power, combat, image
          ) VALUES (
            ${saved.id},
            '${saved.name}',
            ${average},
            ${saved.powerstats.intelligence},
            ${saved.powerstats.strength},
            ${saved.powerstats.speed},
            ${saved.powerstats.durability},
            ${saved.powerstats.power},
            ${saved.powerstats.combat},
            '${saved.image.url}'
          )
        `

        // Add hero to database
        try {
          await connection.query(sqlInsert)
        } catch(error) {
          // SQL query failed
          console.log(`Could not add ${i} to database : ${error}`)
        }

      }
    }

    // Log progression
    console.log(`Progress: ${i} out of 731`)
  }

  // End connection to database
  console.log('Ending connection')
  connection.end()
}

// Setup database connection
mysql
  .createConnection({
    host: 'localhost',
    database: 'hetic_superheroes',
    user: 'superhero',
    password: 'superhero',
    socketPath: '/Applications/MAMP/tmp/mysql/mysql.sock'
  })
  .then(connection => {
    // Start scraping
    scrapeData(connection)
  })
  .catch(error => {
    console.log('Connection failed: ' + error)
  })
