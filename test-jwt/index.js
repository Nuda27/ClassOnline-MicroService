const jwt = require('jsonwebtoken');

const JWT_SECRET = 'bwamicro!123';

//sync
// const token = jwt.sign(
//     { data: { kelas: 'bwamicro'} }, 
//     JWT_SECRET,
//     { expiresIn: '5m' });
// console.log(token);

// //async
// jwt.sign ({ data: { kelas: 'bwamicro'} }, JWT_SECRET, { expiresIn: '1m' },(err, token) => {
//     console.log(token);
// });

const token1 = 'eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJkYXRhIjp7ImtlbGFzIjoiYndhbWljcm8ifSwiaWF0IjoxNjUzMDU0NjU1LCJleHAiOjE2NTMwNTQ5NTV9.PrA86dsO2shWc1cfTp_bixa9zCqFu0IhzPzmLtd8SHs'

// jwt.verify(token, JWT_SECRET, (err, decoded) => {
//     if(err)
//     {
//         console.log(err.message);
//         return;
//     }

//     console.log(decoded);
// });

    //cara2
    try 
    {
        const decoded =  jwt.verify(token1, JWT_SECRET);
        console.log(decoded);
    } catch (error) 
    {
        console.log(error.message);
    }