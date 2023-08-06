<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Signup</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9"
      crossorigin="anonymous"
    />
    <!-- Bootstrap Icons CDN -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css"
      integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e"
      crossorigin="anonymous"
    />

    <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"
  ></script>

  <script src="script.js"></script>
  <link rel="stylesheet" href="../style/address.css" />
  </head>
  <body>
    <div class="containe">
      <div class="row mx-0 justify-content-center">
        <div class="col-md-7 col-lg-5 px-lg-2 col-xl-4 px-xl-0 px-xxl-3">
          <form
            method="POST"
            class="
              w-100
              rounded-1
              p-4
              border
              text-secondary
              bg-dark
              border-secondary
            "
            action=""
          >

          <div class="primary-heading">
        <div class="logo"></div>
        <div class="title">Address</div>
          </div>
            <label class="d-block mb-4">
              <span class="form-label d-block text-light">Address</span>
              <input
                name="address1"
                type="text"
                class="form-control text-light border-secondary bg-transparent"
                placeholder=" "
              />
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block text-light">Street</span>
              <input
                name="address1"
                type="text"
                class="form-control text-light border-secondary bg-transparent"
                placeholder=""
              />
            </label>
    
    
    
               <label class="d-block mb-4">
              <span class="form-label d-block text-light">Country</span>
              <select name="country" class="form-select text-light border-secondary bg-transparent">
                <option value="India" class="text-dark">India</option>
                <option value="United States" class="text-dark">United States</option>
                </select>
                
            </label>

            <label class="d-block mb-4">
              <span class="form-label d-block text-light">State</span>
              <input
                name="state"
                type="text"
                class="form-control text-light border-secondary bg-transparent"
                placeholder=""
              />
            </label>
    
    
            <div class="mb-3">
              <button type="submit" class="btn btn-primary px-3 rounded-3">
                Save Address
              </button>
            </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    
  </body>

</html>
