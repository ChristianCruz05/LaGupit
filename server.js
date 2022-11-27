// const mysql=require("mysql2/promise");

// const insertIntoDB= async()=>{
//     const connection = await mysql.createConnection({
//         host: "sql12.freesqldatabase.com",
//         user: "sql12580022",
//         password: "mNmmq5d7cF",
//         database: "sql12580022",
//         port:3306,
//     })

//     try{
//         await connection.query(
//             "INSERT INTO user (id, username, password, email, address, is_barber)VALUES (3, 'hello', 'password', 'user1@gmail.com', 'Quezon Avenue', 0)"
//         )
//         console.log("inserted")
//     }catch(e){
//         console.log("not working")
//     }
// }

// insertIntoDB();