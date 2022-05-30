<template>
  <div class="container">
    <div class="row justify-content-center">
      <h2>Calculator</h2>

      <div>
        <div class="alert alert-danger" role="alert" v-if="error">
          {{ error}}
        </div>
        <form class="needs-validation" novalidate @submit.prevent="reCalcule">
          <div class="row g-3">
            <div class="col-sm-2">
              <!-- <label for="firstName" class="form-label">First name</label> -->
              <input
                type="text"
                class="form-control"
                id="firstName"
                placeholder="5"
                v-model="data.firstNumber"
                required
              />
              <div class="invalid-feedback">Valid first digit is required.</div>
            </div>
            <div class="col-sm-1">
              <select class="form-select" id="country" required  v-model="data.type">
               <option value="" selected disabled hidden>Choose here</option>
                <option value="add" selected="selected" >👽</option>
                <option value="sub">💀</option>
                <option value="multi">👻</option>
                <option value="div">😱</option>
              </select>
              <div class="invalid-feedback">Please select a valid country.</div>
            </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input
                type="text"
                class="form-control"
                id="lastName"
                placeholder="7"
                v-model="data.secondNumber"
                required
              />
              <div class="invalid-feedback">Valid last name is required.</div>
            </div>

            <div class="col-sm-1">
              <button class="w-100 btn btn-primary btn-sm" type="submit">
                =
              </button>
            </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input
                type="text"
                class="form-control"
                id="lastName"

                v-model="result"
                disabled
              />
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
     data() {
        return {
            data: {},
            result : '',
            error: ''
        }
    },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
      reCalcule() {
          //console.log(this.data);
                window.axios
                    .post('http://localhost/api/calculate', this.data)
                    .then(response => (
                        //this.$router.push({ name: 'home' })
                       this.result = response.data.result
                    ))
                    .catch(err => console.log(err.response.data.error))
                    .finally(() => this.loading = false)        
      },
  }
};
</script>
