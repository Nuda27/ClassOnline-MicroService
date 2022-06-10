const express = require('express');
const router = express.Router();
const mediaHandler = require('./handler/media');
//const { APP_NAME } = process.env;

const verifyToken = require('../middlewares/verifyToken');

/* GET users listing. */
router.post('/', mediaHandler.create);
router.get('/', verifyToken, mediaHandler.getAll);
router.delete('/:id', mediaHandler.destroy);

module.exports = router;
