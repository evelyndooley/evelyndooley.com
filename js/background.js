(function(){

  var height = document.documentElement.clientHeight
  var width = document.documentElement.clientWidth

  var v_segments
  var h_slices

  if (width / 2 > height) {
    v_segments = 16
    h_slices = 8
  }
  else {
    v_segments = 6
    h_slices = 8
  }

  //------------------------------
  // Mesh Properties
  //------------------------------
  var MESH = {
    width: 1.5,
    height: 1.5,
    depth: 0,
    segments: v_segments,
    slices: h_slices,
    xRange: 0.8,
    yRange: 0.2,
    zRange: 1.0,
    ambient: '#555555',
    diffuse: '#FFFFFF',
    speed: 0.0001
  };

//------------------------------
// Light Properties
//------------------------------
var light = new FSS.Light('#006666', '#444444');
var light2 = new FSS.Light('#006666', '#444444');
var light3 = new FSS.Light('#006666', '#444444');
var light4 = new FSS.Light('#006666', '#444444');
var light5 = new FSS.Light('#555555', '#CA486d');


  //------------------------------
  // Global Properties
  //------------------------------
  var now, start = Date.now();
  var attractor = FSS.Vector3.create();
  var center = FSS.Vector3.create();
  var container = document.getElementById("container");
  var output = document.getElementById('output');
  var renderer, scene, mesh, geometry, material;
  var webglRenderer;

  //------------------------------
  // Methods
  //------------------------------
  function initialise() {
    createRenderer();
    createScene();
    createMesh();
    createLights();
    addEventListeners();
    resize(container.offsetWidth, container.offsetHeight);
    animate();
  }

  function createRenderer() {
    if (renderer) {
        output.removeChild(renderer.element);
    }
    webglRenderer = new FSS.WebGLRenderer();
    renderer = webglRenderer;
    renderer.setSize(container.offsetWidth, container.offsetHeight);
    output.appendChild(renderer.element);
  }

  function createScene() {
    scene = new FSS.Scene();
  }

  function createMesh() {
    scene.remove(mesh);
    renderer.clear();
    geometry = new FSS.Plane(MESH.width * renderer.width, MESH.height * renderer.height, MESH.segments, MESH.slices);
    material = new FSS.Material(MESH.ambient, MESH.diffuse);
    mesh = new FSS.Mesh(geometry, material);
    scene.add(mesh);

    // Augment vertices for animation
    var v, vertex;
    for (v = geometry.vertices.length - 1; v >= 0; v--) {
      vertex = geometry.vertices[v];
      vertex.anchor = FSS.Vector3.clone(vertex.position);
      vertex.step = FSS.Vector3.create(
        Math.randomInRange(0.2, 1.0),
        Math.randomInRange(0.2, 1.0),
        Math.randomInRange(0.2, 1.0)
      );
      vertex.time = Math.randomInRange(0, Math.PIM2);
    }
  }

  function createLights() {
    scene.add(light);
    scene.add(light2);
    scene.add(light3);
    scene.add(light4);
    scene.add(light5);
  }

  function resize(width, height) {
    renderer.setSize(width, height);
    FSS.Vector3.set(center, renderer.halfWidth, renderer.halfHeight);
    createMesh();
  }

  function animate() {
    now = Date.now() - start;
    update();
    render();
    requestAnimationFrame(animate);
  }

  function update() {
    var ox, oy, oz, v, vertex, offset = MESH.depth/2;


    // Animate Vertices
    for (v = geometry.vertices.length - 1; v >= 0; v--) {
      vertex = geometry.vertices[v];
      ox = Math.sin(vertex.time + vertex.step[0] * now * MESH.speed);
      oy = Math.cos(vertex.time + vertex.step[1] * now * MESH.speed);
      oz = Math.sin(vertex.time + vertex.step[2] * now * MESH.speed);
      FSS.Vector3.set(vertex.position,
        MESH.xRange*geometry.segmentWidth*ox,
        MESH.yRange*geometry.sliceHeight*oy,
        MESH.zRange*offset*oz - offset);
      FSS.Vector3.add(vertex.position, vertex.anchor);
    }

    // Set the Geometry to dirty
    geometry.dirty = true;
  }

  function render() {
    renderer.render(scene);
    light.setPosition(container.offsetWidth/2, 200*Math.cos(now*0.0003), 30);
    light2.setPosition(-(container.offsetWidth/2), 200*Math.sin(now*0.0003), 30);
    light3.setPosition(container.offsetWidth/4, 200*Math.sin(now*0.0003), 50);
    light4.setPosition(-(container.offsetWidth/4), 200*Math.cos(now*0.0003), 50);
    //light5.setPosition(onmousemove.x, onmousemove.y, 100);
  }

  function addEventListeners() {
    window.addEventListener('resize', onWindowResize);
    container.addEventListener('mousemove', onMouseMove);
  }

  //------------------------------
  // Callbacks
  //------------------------------
  function onWindowResize(event) {
    resize(container.offsetWidth, container.offsetHeight);
    render();
  }

  function onMouseMove(event) {
    // FSS.Vector3.set(attractor, event.x, renderer.height - event.y);
    // FSS.Vector3.subtract(attractor, center);
    light5.setPosition(event.x-container.offsetWidth/2,
                      -event.y+container.offsetHeight/2, 20);

  }

  // Let there be light!
  initialise();

})();
