const isMobile = /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
  navigator.userAgent
);
const randomNumber = (min, max) =>
  Math.floor(Math.random() * (max - min + 1) + min);
const clampNumber = (min, max, value) =>
  value < min ? min : value > max ? max : value;

let servicesScrolledIn = false;

document.addEventListener("DOMContentLoaded", () => {
  
  handleServices();
  
});


// Services blocks
function handleServices() {
  let blocksUpdated = false;
  const Engine = Matter.Engine;
  const Render = Matter.Render;
  const Events = Matter.Events;
  const Runner = Matter.Runner;
  const Bodies = Matter.Bodies;
  const Body = Matter.Body;
  const Composite = Matter.Composite;
  const World = Matter.World;
  const Composites = Matter.Composites;
  const MouseConstraint = Matter.MouseConstraint;
  const Mouse = Matter.Mouse;
  const Vertices = Matter.Vertices;
  const Svg = Matter.Svg;

  const container = document.querySelector(".home_services");
  const width = container.getBoundingClientRect().width;
  const height = container.getBoundingClientRect().height;
  const restitution = 0.3;

  const engine = Engine.create();
  engine.gravity.y = 1;
  const world = engine.world;
  const render = Render.create({
    element: container,
    engine: engine,
    options: {
      width: width,
      height: height,
      wireframes: false,
      background: "transparent"
    }
  });

  setupMouse();
  createWalls();
  Render.run(render);
  const runner = Runner.create();
  Runner.run(runner, engine);
  createBodies();
  updateBodies();
  createScrollGravity();

  function createBodies() {
    const bodies = [];

    document.querySelectorAll(".service-block").forEach((block) => {
      const w = block.getBoundingClientRect().width;
      const h = block.getBoundingClientRect().height;
      const radius = +window
        .getComputedStyle(block)
        .getPropertyValue("border-radius")
        .replace("px", "");
      const randomW = randomNumber(0, width.toFixed(0));
      const body = Bodies.rectangle(randomW, -150, w, h, {
        isStatic: true,
        isSensor: true,
        restitution: restitution,
        label: "block",
        render: {
          fillStyle: "transparent",
          strokeStyle: "transparent"
        },
        chamfer: { radius }
      });
      bodies.push(body);
      Events.on(runner, "tick", () => {
        block.style.top = body.position.y + "px";
        block.style.left = body.position.x + "px";
        block.style.transform = `translate(-50%, -50%) rotate(${body.angle}rad)`;
      });
    });
    Composite.add(world, bodies);
  }

  function createWalls() {
    const top = Bodies.rectangle(0, -300, 2 * width, 50, {
      isStatic: true,
      label: "wall",
      render: {
        fillStyle: "transparent",
        //strokeStyle: "transparent"
      }
    });
    const bottom = Bodies.rectangle(0, height + 30, 2 * width, 60, {
      isStatic: true,
      label: "wall",
      render: {
        fillStyle: "transparent",
        //strokeStyle: "transparent"
      }
    });
    const left = Bodies.rectangle(-150, 0, 300, 2 * height, {
      isStatic: true,
      label: "wall",
      render: {
        fillStyle: "transparent",
        //strokeStyle: "transparent"
      }
    });
    const right = Bodies.rectangle(width + 148, 0, 300, 2 * height, {
      isStatic: true,
      label: "wall",
      render: {
        fillStyle: "transparent",
        //strokeStyle: "transparent"
      }
    });
    Composite.add(world, [bottom, top, left, right]);
  }

  function setupMouse() {
    // if (window.innerWidth < 1024) return;
    const a = Mouse.create(render.canvas);
    const b = MouseConstraint.create(engine, {
      mouse: a,
      constraint: { stiffness: 0.1, render: { visible: false } }
    });
    Composite.add(world, b);
    render.mouse = a;
    a.element.removeEventListener("mousewheel", a.mousewheel);
    a.element.removeEventListener("DOMMouseScroll", a.mousewheel);
  }

  function updateBodies() {
    const observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting && !servicesScrolledIn) {
            servicesScrolledIn = true;
            const blocks = Matter.Composite.allBodies(world).filter(
              (v) => v.label === "block"
            );

            blocks.forEach((body, idx) => {
              setTimeout(() => {
                Body.setStatic(body, false);
                body.isSensor = false;
                if (blocks.length === idx + 1) {
                  blocksUpdated = true;
                }
              }, idx * 500);
            });
          }
        });
      },
      { threshold: 1 }
    );
    observer.observe(container);
  }

  function createScrollGravity() {
    let lastScrollTop = 0;
    Events.on(runner, "tick", () => {
      if (!blocksUpdated) return;
      const scrollTop = document.documentElement.scrollTop;
      const r = scrollTop - lastScrollTop;
      const grav = 1 - clampNumber(-2, 4, r * 0.2);
      engine.world.gravity.y = grav;
      lastScrollTop = scrollTop;
    });
  }
}
