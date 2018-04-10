// Dependencies
const fetch = require('node-fetch')
const fs = require('fs')

// Prepare requests
const apiUrl = 'http://superheroapi.com/api/'

let results = []

const scrapeData = async () => {
  for (let i=5; i<20; i++) {
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
      console.log(ratings)
      // Convert all ratings to int
      ratings = ratings.map(rating => parseInt(rating))
      // Calculate average
      const average = ratings.reduce((total, rating) => total + rating) / ratings.length;
      console.log('average : ' + average)

      // Only save if all ratings are set and average is good
      if (isNaN(average) || average < 30) {
        console.log('not worth keeping')
      } else {
        const selectedValues = (({ id, name, powerstats }) => ({ id, name, powerstats }))(response)
        results.push(selectedValues)
      }
    }

    // Log progression
    console.log(`Progress: ${i} out of 731`)
  }

  // Save results to cache
  fs.writeFile('./app/cache/heroes.txt', JSON.stringify(results))
}

scrapeData()