@extends('base')

@section('links')
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,400i,700" rel="stylesheet">
    <link href="{{asset('css/events.css')}}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="{{asset('js/bootbox.min.js')}}"></script>
    <script
      src="https://code.jquery.com/jquery-3.1.1.min.js"
      integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
      crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/phaser/2.6.2/custom/p2.js"></script>
    <title></title>
    <style type="text/css">
      * {
        box-sizing: border-box;
      }

      html, body, canvas {
        position: absolute;
        overflow: hidden;
        height: 100%;
        width: 100%;
        left: 0;
        top: 0;
      }

      body {
        background: #2B3E50;
      }

      canvas {
        z-index: -1000;
        -webkit-filter: url("#fluid");
                filter: url("#fluid");
      }

    </style>
@endsection
@section('main')
  <div id="modal-container">
  </div>
  <canvas></canvas>
  <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
      <filter id="fluid">
        <feGaussianBlur in="SourceGraphic" stdDeviation="15" result="blur" />
        <feColorMatrix in="blur" mode="matrix" values="
          1 0 0 0 0
          0 1 0 0 0  
          0 0 1 0 0 
          0 0 0 100 -12
        "/>
      </filter>
    </defs>

   <div class="main-clusters-container">
   </div> 

    <script type="text/template" id="clusters-template">
      @{{#each clusters}}
        <div class="circle-cluster" style="background-color: @{{color}}" id="@{{cluster_name}}">
            <span id="@{{cluster_name}}">@{{cluster_name}}</span>
        </div>
      @{{/each}}
    </script>

    <script type="text/template" id="events-template">
      @{{#each events}}
        <div class="circle-events"  data-toggle="modal" data-target="#events-modal" style="background-color: @{{color}}" id="@{{event_name}}">
            <span id="@{{event_name}}" >@{{event_name}}</span>
        </div>
      @{{/each}}
    </script>


  <script type="text/javascript">
    (function() {
      var App,
        bind = function(fn, me){ return function(){ return fn.apply(me, arguments); }; };

      App = (function() {
        App.prototype.prefs = {
          gravity: 900,
          colors: ["#DF691A"],
          particle: {
            count: 50,
            scaleMin: 10,
            scaleMax: 20,
            mass: 1
          }
        };

        function App() {
          this.draw = bind(this.draw, this);
          this.onMove = bind(this.onMove, this);
          this.onResize = bind(this.onResize, this);
          this.update = bind(this.update, this);
          this.getElements();
          this.addListeners();
          this.makeWorld();
          this.makeParticles();
          this.onResize();
          this.update();
        }

        App.prototype.getElements = function() {
          this.width = window.innerWidth;
          this.height = window.innerHeight;
          this.canvas = document.querySelector("canvas");
          return this.c = this.canvas.getContext("2d");
        };

        App.prototype.addListeners = function() {
          document.body.addEventListener("resize", this.onResize);
          document.body.addEventListener("mousemove", this.onMove);
          return document.body.addEventListener("touchmove", this.onMove);
        };

        App.prototype.makeWorld = function() {
          var bottom, contact, left, right, top;
          this.world = new p2.World({
            gravity: [0, this.prefs.gravity]
          });
          this.bounds = {
            bottom: new p2.Body({
              mass: 0
            }),
            right: new p2.Body({
              mass: 0
            }),
            left: new p2.Body({
              mass: 0
            }),
            top: new p2.Body({
              mass: 0
            })
          };
          left = new p2.Box({
            width: 1000,
            height: this.height + 1000
          });
          right = new p2.Box({
            width: 1000,
            height: this.height + 1000
          });
          bottom = new p2.Box({
            width: this.width + 1000,
            height: 1000
          });
          top = new p2.Box({
            width: this.width + 1000,
            height: 1000
          });
          this.bounds.bottom.addShape(bottom);
          this.bounds.right.addShape(right);
          this.bounds.left.addShape(left);
          this.bounds.top.addShape(top);
          this.world.addBody(this.bounds.bottom);
          this.world.addBody(this.bounds.right);
          this.world.addBody(this.bounds.left);
          this.world.addBody(this.bounds.top);
          this.material = new p2.Material();
          contact = new p2.ContactMaterial(this.material, this.material, {
            friction: 0,
            restitution: 1.5,
            stiffness: 200,
            relaxation: 1
          });
          return this.world.addContactMaterial(contact);
        };

        App.prototype.makeParticles = function() {
          var color, particle, results, scale, shape, x, y;
          this.particles = [];
          results = [];
          while (this.particles.length < this.prefs.particle.count) {
            color = this.prefs.colors[Math.floor(Math.random() * this.prefs.colors.length)];
            scale = Math.round(this.prefs.particle.scaleMin + Math.random() * (this.prefs.particle.scaleMax - this.prefs.particle.scaleMin));
            x = this.width / 2 - scale / 2;
            y = this.height / 2 - scale / 2;
            particle = {
              body: new p2.Body({
                mass: this.prefs.particle.mass,
                position: [x, y]
              }),
              color: color,
              radius: scale
            };
            shape = new p2.Circle({
              radius: scale
            });
            shape.material = this.material;
            particle.body.addShape(shape);
            this.world.addBody(particle.body);
            results.push(this.particles.push(particle));
          }
          return results;
        };

        App.prototype.update = function(now) {
          var delta;
          requestAnimationFrame(this.update);
          delta = this.past ? (now - this.past) / 1000 : 0;
          this.world.step(1 / 120, delta, 10);
          this.past = now;
          return this.draw();
        };

        App.prototype.onResize = function() {
          this.width = window.innerWidth;
          this.height = window.innerHeight;
          this.canvas.setAttribute("style", "width: " + this.width + "px; height: " + this.height + "px");
          this.canvas.setAttribute("height", this.height);
          this.canvas.setAttribute("width", this.width);
          this.bounds.bottom.position = [this.width / 2, this.height + 500];
          this.bounds.right.position = [this.width + 500, this.height / 2];
          this.bounds.left.position = [-500, this.height / 2];
          return this.bounds.top.position = [this.width / 2, -500];
        };

        App.prototype.onMove = function(e) {
          var angle, distance, ex, ey, force, max, x, y;
          if (e.touches != null) {
            ex = e.touches[0].clientX;
            ey = e.touches[0].clientY;
          } else {
            ex = e.clientX;
            ey = e.clientY;
          }
          angle = Math.atan2(ey - this.height / 2, ex - this.width / 2);
          distance = Math.sqrt(Math.pow(ex - this.width / 2, 2) + Math.pow(ey - this.height / 2, 2));
          max = Math.max(this.width / 2, this.height / 2);
          force = this.prefs.gravity * (distance / max);
          x = force * Math.cos(angle);
          y = force * Math.sin(angle);
          return this.world.gravity = [x, y];
        };

        App.prototype.draw = function() {
          var i, len, particle, ref, results;
          this.c.clearRect(0, 0, this.width, this.height);
          ref = this.particles;
          results = [];
          for (i = 0, len = ref.length; i < len; i++) {
            particle = ref[i];
            this.c.beginPath();
            this.c.fillStyle = particle.color;
            this.c.arc(particle.body.position[0], particle.body.position[1], particle.radius, 0, 2 * Math.PI, false);
            this.c.fill();
            results.push(this.c.closePath());
          }
          return results;
        };

        return App;

      })();

      new App();

    }).call(this);

  </script>
  <script src="{{asset('js/events.js')}}"></script>
@endsection
