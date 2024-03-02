<template>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
  </head>

  <body>
    <div class="container">
      <h1>Login Form</h1>
      <form @submit.prevent="login" class="form">
        <input type="email" name="email" placeholder="Email" v-model="email" required>
        <input type="password" name="password" placeholder="Password" v-model="password" required>
        <input type="submit" value="Login">
      </form>
      <p>Don't have an Account? <a href="/register">Register Now!</a></p>
      <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
    </div>
  </body>

  </html>
</template>

<script>
import axios from 'axios';

export default {
  data() {
    return {
      email: "",
      password: "",
      errorMessage: ""
    }
  },
  methods: {
    async login() {
      try {
        const response = await axios.post(
          `http://127.0.0.1:8000/api/login`,
          {
            email: this.email,
            password: this.password,
          },
          {
            headers: {
              "X-Requested-With": "XMLHttpRequest",
              "Access-Control-Allow-Credentials": "true",
            },
            withCredentials: true,
          }
        );

        if (response.status === 200) {
          alert(response.data.message);
          console.log(response);

          // Redirect based on email
          if (this.email === "admin@gmail.com") {
            this.$router.push({
              name: 'admin'
            });
          } else {
            this.$router.push({
              name: 'home'
            });
          }
        }
      } catch (error) {
        if (error.response) {
          // The request was made and the server responded with a status code
          // that falls out of the range of 2xx
          this.errorMessage = error.response.data.message;
        } else if (error.request) {
          // The request was made but no response was received
          this.errorMessage = "No response received from the server.";
        } else {
          // Something happened in setting up the request that triggered an Error
          console.error("Error", error.message);
          this.errorMessage = "An error occurred while processing your request.";
        }
      }
    }
  }
}


</script>

<style scoped>
.container {
  max-width: 400px;
  margin: 15% auto;
  padding: 20px;
  background-color: #f9f9f9;
  border-radius: 8px;
  box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 2em;
  text-align: center;
  margin-bottom: 20px;
  color: #333;
}

.form input {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
  background-color: #fff;
  color: #333;
  font-family: 'Roboto', sans-serif;
}

.form input[type="submit"] {
  background-color: #fb8500;
  color: #fff;
  border: none;
  cursor: pointer;
}

.form input[type="submit"]:hover {
  background-color: #ff6b00;
}

p {
  text-align: center;
  margin-top: 20px;
  color: #666;
}

a {
  color: #fb8500;
  text-decoration: none;
}

a:hover {
  color: #ff6b00;
}
</style>
