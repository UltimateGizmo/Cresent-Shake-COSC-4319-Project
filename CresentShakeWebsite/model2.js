// Created using a tutorial from Redstapler
// GLTF 3D Model from Shaw Pen https://codepen.io/shshaw/pen/yPPOEg

// Three JS needs mainly below three things

/* //////////////////////////////////////// */

// SCENE
var scene = new THREE.Scene();
scene.background = new THREE.Color(0x1B273);

/* //////////////////////////////////////// */

// CAMERA
var camera = new THREE.PerspectiveCamera( 80, window.innerWidth / window.innerHeight, 1, 800 );
camera.position.set(5,5,5);

/* ////////////////////////////////////////// */

// RENDERER
var renderer = new THREE.WebGLRenderer( { antialias: true } );
renderer.setSize( window.innerWidth, window.innerHeight );

// Append canvas to the body
document.body.appendChild( renderer.domElement);

/* ////////////////////////////////////////// */

// Camera Rotation Control
var controls = new THREE.OrbitControls( camera );

controls.rotateSpeed = 0.3;
controls.zoomSpeed = 0.9;

controls.minDistance = 3;
controls.maxDistance = 20;

controls.minPolarAngle = 0; // radians
controls.maxPolarAngle = Math.PI /2; // radians

controls.enableDamping = true;
controls.dampingFactor = 0.05;


/* /////////////////////////////////////////////// */

// Point Light
var light = new THREE.PointLight( 0xffffcc, 20, 200 );
light.position.set( 4, 30, -20 );
scene.add( light );

var light2 = new THREE.AmbientLight( 0x20202A, 20, 100 );
light2.position.set( 30, -10, 30 );
scene.add( light2 );

/* ////////////////////////////////////////// */

// GLTF Loader to Load and manipulate 3D Models
var loader = new THREE.GLTFLoader();

loader.crossOrigin = true;
/*THIS IS MOSTLIKEY THE WAY TO LOAD THE MODLE*/ 
loader.load( 'C:/Users/coryl/OneDrive/Desktop/website/CarTestModel/free__ferrari_f40_sdc/scene.gltf', function ( data ) {
    var object = data.scene;
     object.position.set(0, -10, -0.1);
     object.scale.set(0.5,0.5,0.5);
    scene.add( object );
});

/* //////////////////////////////////////// */

// Render animation on every rendering phase
function render () {
  requestAnimationFrame( render ); 
  renderer.render( scene, camera ); // Render Scene and Camera
  controls.update(); // For Orbit Controller
}

render();

/*////////////////////////////////////////*/

// Update Camera Aspect Ratio and Renderer ScreenSize on Window resize
window.addEventListener( 'resize', function () {
  camera.aspect = window.innerWidth / window.innerHeight;
  camera.updateProjectionMatrix();
  renderer.setSize( window.innerWidth, window.innerHeight );
}, false );

/*////////////////////////////////////////*/