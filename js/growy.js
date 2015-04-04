(function() {
   function funcGen(theWidth) {
      return function(event) {
         $(event.currentTarget).find('.growy-underline').css('width', theWidth);
      };
   }

   $(document).on('mouseout', 'h1', funcGen('0%'));
   $(document).on('mouseover', 'h1', funcGen('100%'));
}());
