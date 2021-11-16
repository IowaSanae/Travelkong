// https://www.freecodecamp.org/news/introduction-to-mongoose-for-mongodb-d2a7aa593c57/
let mongoose = require('mongoose')

const server = '';
const database = '';

class Database {
    constructor() {
        this._connect()
    }

    _connect() {
        mongoose.connect(`mongodb://${server}/${database}`).then(() => {
            console.log('Database connection successful')
        }).catch(err => {
            console.error('Database connection error')
        })
    }
}

module.exports = new Database()