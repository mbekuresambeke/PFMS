@extends('layouts.app')
@section('content')
<div id="app">
  <form method="POST" action="/home/test">
    @csrf
    <input type="text" v-model="name" class="form-control m-2 p-2 borderless shadow-sm "><br>
    <input type="email" v-model="email" class="form-control m-2 p-2 borderless shadow-sm "><br>
    <button type="submit" @click.prevent="submitForm">Submit</button>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script>
  new Vue({
    el: '#app',
    data: {
      name: '',
      email: ''
    },
    methods: {
      submitForm: function() {
        // Submit the form data to the Laravel controller using Axios
        axios.post('/submit', {
          name: this.name,
          email: this.email
        })
        .then(function(response) {
          console.log(response.data);
        })
        .catch(function(error) {
          console.log(error);
        });
      }
    }
  });
</script>
@endsection
