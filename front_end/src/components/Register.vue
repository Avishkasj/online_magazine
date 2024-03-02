<template>
  <div class="container">
    <h1>SignUp Form</h1>
    <div class="form">
      <form @submit.prevent="register">
        <input
          type="text"
          name="username"
          placeholder="Username"
          v-model="username"
          required
        />
        <input
          type="email"
          name="email"
          placeholder="Email"
          v-model="email"
          required
        />
        <input
          type="text"
          name="age"
          placeholder="Age"
          v-model="age"
          required
        />
        <input
          type="password"
          name="password"
          placeholder="Password"
          v-model="password"
          required
        />
        
        <div>
          <input type="checkbox" required />
          <span>I Agree To The Terms & Conditions</span>
        </div>
        <input type="submit" value="SIGNUP" />
      </form>
      <p>Already have an Account? <a href="/login">Login Now!</a></p>
      <p v-if="errorMessage" class="error-message">{{ errorMessage }}</p>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  data() {
    return {
      username: "",
      email: "",
      age: "",
      password: "",
      confirmPassword: "",
      errorMessage: ""
    };
  },
  methods: {
    async register() {
      try {
        const response = await axios.post(
          `http://127.0.0.1:8000/api/register`,
          {
            username: this.username,
            email: this.email,
            age: this.age,
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

        if (response.status == 201) {
          alert("success");
        }

        console.log(response);
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
    },
  },
};
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

.error-message {
  color: red;
  text-align: center;
  margin-top: 10px;
}
</style>
