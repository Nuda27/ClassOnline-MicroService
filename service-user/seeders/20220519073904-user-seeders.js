'use strict';
const bcrypt = require('bcrypt');
const { DATE } = require('sequelize');

module.exports = {
  async up (queryInterface, Sequelize) {
     await queryInterface.bulkInsert('users', [
      {
        name: "Nuda",
        profession: "Admin Micro",
        role: "Admin",
        email: "nhuda55161@gmail.com",
        password: await bcrypt.hash('nuda2719', 8),
        created_at: new Date(),
        updated_at: new Date(),
      },
      {
        name: "Ulyah",
        profession: "Game Dev",
        role: "Student",
        email: "ulyah@gmail.com",
        password: await bcrypt.hash('ulyah2719', 9),
        created_at: new Date(),
        updated_at: new Date(),
      }
    ]);
  },

  async down (queryInterface, Sequelize) {
    await queryInterface.bulkDelete('users', null, {});
  }
};
