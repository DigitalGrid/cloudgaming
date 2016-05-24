(function() {

  var width, height, largeHeader, canvas, ctx, circles;

  // init when everythings ready 
  window.onload = function() {
    initHeader();
  };
    
    /*
    * Set width and height of canvas
    * Create circles
    * Start animating
    */
    function initHeader() {
        largeHeader = document.getElementById('site-header');
        largeHeader.style.height = height+'px';
      
        width = largeHeader.clientWidth;
        height = largeHeader.clientHeight;
      
        canvas = document.getElementById('bubble-canvas');
        canvas.width = width;
        canvas.height = height;
        ctx = canvas.getContext('2d');

        // create bubbles
        circles = [];
        for(var x = 0; x < width*0.5; x++) {
            var c = new Circle();
            circles.push(c);
        }
        animate();
    }
    
    /*
    * animate circles
    */
    function animate() {
      ctx.clearRect(0,0,width,height);
      for(var i in circles) {
        circles[i].draw();
      }  
      requestAnimationFrame(animate);
    }

    /*
    * Circle
    */
    function Circle() {
      this.pos = {};
      this.setup();
    }
    
    /*
    * setup a new circle
    */
    Circle.prototype.setup = function() {
      this.pos.x = Math.random()*width;
      this.pos.y = height+Math.random()*100;
      this.alpha = 0.05+Math.random()*0.22;
      this.scale = 0.1+Math.random()*0.3;
      this.velocity = Math.random()*0.7;
    }
    
    /*
    * update circle
    */
    Circle.prototype.draw = function() {
      if(this.alpha <= 0) {
        this.setup();
      }
      this.pos.y -= this.velocity;
      this.alpha -= 0.0003;
      ctx.beginPath();
      ctx.arc(this.pos.x, this.pos.y, this.scale*10, 0, 2 * Math.PI, false);
      ctx.fillStyle = 'rgba(255,255,255,'+this.alpha+')';
      ctx.fill();
    };

})();