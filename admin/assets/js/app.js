Dropzone.options.myDrop = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 2, // MB
  accept: function(file, done) {
    if (file.size > 2000000) {
      done("Imagen demasiado grande");
    }
    else { done(); }
  }
};