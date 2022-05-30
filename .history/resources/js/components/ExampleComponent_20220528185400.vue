<template>
    <div class="container">
        <div class="row justify-content-center">
            
            <h2>Calculator</h2>

            
            <div>
                <form class="needs-validation" novalidate>
          <div class="row g-3">
            <div class="col-sm-2">
              <!-- <label for="firstName" class="form-label">First name</label> -->
              <input type="text" class="form-control" id="firstName" placeholder="first Digit" value="" required>
              <div class="invalid-feedback">
                Valid first digit is required.
              </div>
            </div>
            <div class="col-sm-1">
                <div class="dropdown">
                    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        Add
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdown">
                        <li><a class="dropdown-item" href="#">👽 Addition</a></li>
                        <li><a class="dropdown-item" href="#">💀 Subtraction</a></li>
                        <li><a class="dropdown-item" href="#">👻 Multiplication</a></li>
                        <li><a class="dropdown-item" href="#">😱 Division</a></li>
                    </ul>
                    </div>
            </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input type="text" class="form-control" id="lastName" placeholder="second Digit" value="" required>
              <div class="invalid-feedback">
                Valid last name is required.
              </div>
            </div>

             <div class="col-sm-1">
                 =
             </div>

            <div class="col-sm-2">
              <!-- <label for="lastName" class="form-label">Last name</label> -->
              <input type="text" class="form-control" id="lastName" placeholder="Sum" value="" required>
              
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
