<template>
    <div class="container">
        <div class="row justify-content-center">
            
            <h2>Calculator</h2>

            
            <div>
                <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-2">
              <!-- <label for="firstName" class="form-label">First name</label> -->
              <input type="text" class="form-control" id="firstName" placeholder="5" value="" required>
              <div class="invalid-feedback">
                Valid first digit is required.
              </div>
            </div>
            <div class="col-sm-2">
                    <select class="form-select" id="country" required>
                        <option value="">Add</option>
                        <option>👽 Addition</option>
                        <option>💀 Subtraction</option>
                        <option>👻 Multiplication</option>
                        <option>😱 Division</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a valid country.
                    </div>
            </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input type="text" class="form-control" id="lastName" placeholder="7" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

             <div class="col-sm-1">
                 =
             </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input type="text" class="form-control" id="lastName" placeholder="12" value="" disabled>
              
            </div>


          </div>
          </form>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
