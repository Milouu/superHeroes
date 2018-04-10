// Dependencies
const fetch = require('node-fetch')
const fs = require('fs')

// Prepare requests
const apiUrl = 'http://superheroapi.com/api/'
const apiKeys = ['10215446684301563', '1392776330826904']

let results = []

const scrapeData = async () => {
  for (let i=1; i<731; i++) {
    const request = `${apiUrl}${apiKeys[i%2]}/${i}`
    let response

    try {
      response = await fetch(request)
      response = await response.json()
    } catch(error) {
      console.log(error)
    }

    // Only save if request was successful
    if (response && response.response === 'success') {
      const selectedValues = (({ id, name, powerstats }) => ({ id, name, powerstats }))(response)
      results.push(selectedValues)
    }

    // Log progression
    console.log(`Progress: ${i} out of 731`)
  }

  // Save results to cache
  fs.writeFile('./app/cache/heroes.txt', JSON.stringify(results))
}

scrapeData()