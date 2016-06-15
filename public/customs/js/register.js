  var loadFile = function(event) {
      var output = document.getElementById('img-thumb');
      output.src = URL.createObjectURL(event.target.files[0]);
  };
