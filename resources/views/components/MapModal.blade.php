<!--Modal-->
<div class="modal opacity-0 pointer-events-none fixed w-full h-full top-0 left-0 flex items-center justify-center">
  <div class="modal-overlay absolute w-full h-full bg-gray-900 opacity-50"></div>
  
  <div class="modal-container bg-white w-4/5 md:max-w-md mx-auto rounded shadow-lg z-50 overflow-y-auto">
    
    <div class="modal-close absolute top-0 right-0 cursor-pointer flex flex-col items-center mt-4 mr-4 text-white text-sm z-50">
      <svg class="fill-current text-white" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
        <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
      </svg>
      <span class="text-sm">(Esc)</span>
    </div>

    <!-- Add margin if you want to see some of the overlay behind the modal-->
    <div class="modal-content py-4 text-left px-6">
      <!--Title-->
      <div class="flex justify-between items-center pb-3">
        <p id="testName" class="text-2xl font-bold"></p>
        <div class="modal-close cursor-pointer z-50">
          <svg class="fill-current text-black" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18">
            <path d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z"></path>
          </svg>
        </div>
      </div>

      <!--Body-->
      <div id="map" style="width: 400px; height: 500px;"></div>
      <!--Footer-->
      <div class="flex justify-end pt-2">
        <button class="modal-close px-4 bg-indigo-500 p-3 rounded-lg text-white hover:bg-indigo-400">Close</button>
      </div>
    </div>
  </div>
</div>

    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD1AsjNTFmYWl61gNLeL_LCr61mc7YU5Gc&libraries=&v=weekly"
      defer
    ></script>

<script type="text/javascript">
  function initMap(cords) {

  var lat = parseFloat(document.getElementById(cords).dataset.latitude)

  var long = parseFloat(document.getElementById(cords).dataset.longitude)

    let map

    map = new google.maps.Map(document.getElementById("map"), {
      
      center: {
        lat: lat,
        lng: long
      },
      zoom: 13
    });

    var marker = new google.maps.Marker({
      position:  {
        lat: lat,
        lng: long
      },
      map: map,
      title: 'Hello World!'
    });
  }
</script>

<script>
  function showModel(value1){
    event.preventDefault()
    toggleModal(value1)
  }

  const overlay = document.querySelector('.modal-overlay')
  overlay.addEventListener('click', toggleModal)
  
  var closemodal = document.querySelectorAll('.modal-close')
  for (var i = 0; i < closemodal.length; i++) {
    closemodal[i].addEventListener('click', toggleModal)
  }
  
  document.onkeydown = function(evt) {
    evt = evt || window.event
    var isEscape = false
    if ("key" in evt) {
  	isEscape = (evt.key === "Escape" || evt.key === "Esc")
    } else {
  	isEscape = (evt.keyCode === 27)
    }
    if (isEscape && document.body.classList.contains('modal-active')) {
  	toggleModal()
    }
  };
  
  function toggleModal (cords1) {
    const body = document.querySelector('body')
    const modal = document.querySelector('.modal')
    modal.classList.toggle('opacity-0')
    modal.classList.toggle('pointer-events-none')
    body.classList.toggle('modal-active')
    initMap(cords1)
  }
   
</script>