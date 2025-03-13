<?php
// Set the cookie
setcookie("admin", "false", [
    'expires' => time() + 3600,
    'path' => '/',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'Strict'
]);



?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="src/assets/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="src/assets/favicon/favicon.svg" />
    <link rel="shortcut icon" href="src/assets/favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="src/assets/favicon/apple-touch-icon.png" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="src/assets/favicon/site.webmanifest" />
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles/styles.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <style>
      .custom-svg {
        fill: white; /* Default color */
        transition: fill 0.3s ease; /* Smooth transition */
      }

      a:hover .custom-svg {
        fill: black; /* Color on hover */
      }


      #pattern {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        flex-wrap: wrap;
        font-size: 20px;
        pointer-events: none; /* Ensure the pattern does not interfere with user interactions */
    }

    /* Style for each binary number */
    .binary {
        width: 20px;
        height: 20px;
        text-align: center;
        transition: color 0.1s ease-in-out, opacity 0.2s ease-in-out;
        color: transparent; /* Initially invisible */
        opacity: 0;
    }

    </style>
  </head>

  <body class="main-content">
    <header class="container header active" id="home">
      <div class="header-content">
        <div class="left-header">
          <div class="h-shape"></div>
          <div class="image">
            <img style="border-radius: 14px" src="img/pic.jpeg" alt="" />
          </div>
        </div>
        <div class="right-header">
          <h1 class="name">
            Hi, I'm <span id="changeName">Nelson.</span><br>
            Hacker and Developer.
          </h1>
          <p style="word-wrap: break-word">
            Started programming at the age of 18, I got a keen interest towards
            Cyber Security and have explored multiple dimensions of it.
          </p>
          <div class="btn-con">
            <a data-id="contact" class="main-btn" >
                        <span class="btn-text">Contact me</span>
                <span class="btn-icon"><i class="fas fa-address-book"></i></span> </a>
                <!-- <i class="fa-regular fa-address-book"></i> -->
          </div>
        </div>
      </div>
    </header>
    <main>
      <section class="container about" id="about">
        <div class="main-title">
          <h2>About <span>me</span><br><span class="bg-text">my stats</span></h2>
        </div>
        <!-- <div class="about-container">
                <div class="left-about">
                    <h4>Information About me</h4>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                        Eveniet labore nihil obcaecati consequatur. Debitis error doloremque, 
                        vero eos vel nemo eius voluptatem dicta tenetur modi. <br /> <br /> La musica
                        delectus dolore fugiat exercitationem a, 
                        ipsum quidem quo enim natus accusamus labore dolores nam. Unde.
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
                        Harum non necessitatibus deleniti eum soluta.
                    </p>
                    <div class="btn-con">
                        <a href="#" class="main-btn">
                            <span class="btn-text">Download CV</span>
                            <span class="btn-icon"><i class="fas fa-download"></i></span>
                        </a>
                    </div>
                </div>
                <div class="right-about">
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">650+</p>
                            <p class="small-text">Projects <br /> Completed</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">10+</p>
                            <p class="small-text">Years of <br /> experience</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">300+</p>
                            <p class="small-text">Happy <br /> Clients</p>
                        </div>
                    </div>
                    <div class="about-item">
                        <div class="abt-text">
                            <p class="large-text">400+</p>
                            <p class="small-text">Customer <br /> reviews</p>
                        </div>
                    </div>
                </div>
            </div> -->
        <!-- <div class="about-stats">
                <h4 class="stat-title">My Skills</h4>
                <div class="progress-bars">
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">80%</p>
                            <div class="progress">
                                <span class="html"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">PHP</p>
                        <div class="progress-con">
                            <p class="prog-text">9%</p>
                            <div class="progress">
                                <span class="css"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Golang</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="js"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">ReactJS</p>
                        <div class="progress-con">
                            <p class="prog-text">75%</p>
                            <div class="progress">
                                <span class="react"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">NodeJS</p>
                        <div class="progress-con">
                            <p class="prog-text">87%</p>
                            <div class="progress">
                                <span class="node"></span>
                            </div>
                        </div>
                    </div>
                    <div class="progress-bar">
                        <p class="prog-title">Python</p>
                        <div class="progress-con">
                            <p class="prog-text">70%</p>
                            <div class="progress">
                                <span class="python"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        <h4 class="stat-title">My Timeline</h4>
        <div class="timeline">
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">Jun 2023 - OCT 2024 (Full-time)</p>
            <h5>
              Penetration Tester<span>
                -
                <a href="https://underwings.in" target="_blank"
                  >Underwings Technology</a
                ></span
              >
            </h5>
            <p>
              - Perform pentesting and Developed ERP websites using the Frappé Framework for major textile industries.<br>
              - Led Development teams, identified and remediated critical vulnerabilities, and implemented security
enhancements to safeguard systems and optimize project outcomes.
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">May 2023 - Oct 2023 (Part-time)</p>
            <h5>
              Trainer<span>
                - <a href="https://greenstechnologys.com/"></a>Greens
                Technology</span
              >
            </h5>
            <p>
              Deliver thorough Cybersecurity Training to diverse groups,
              equipping students with essential skills for securing professional
              positions within the industry.
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">Jun 2022 - Dec 2022 (Full-Time)</p>
            <h5>
              Technical Support Engineer<span>
                -
                <a href="https://selfmade.ninja"
                  >Selfmade Ninja Academy</a
                ></span
              >
            </h5>
            
            <p>
              - Developed a Python-based CLI tool to control students' lab activities and optimizing management.<br>
              - Performed comprehensive vulnerability assessment and testing on a student academy website, and configured
              WireGuard VPN for enhanced network security and connectivity.
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">Sep 2021 - Jan 2022 (Internship)</p>
            <h5>
              Cyber Security Summer Intern<span> - Cyber Crime Cell</span>
            </h5>
            <p>
              Assisted in the investigation of cybercrimes such as hacking and
              identity theft, and learned about legal frameworks and procedures
              for addressing these crimes
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">Mar 2021 - Dec 2021 (Certification)</p>
            <h5>Student and Intern<span> - Prompt Infotech</span></h5>
            <p>
              Learned about the various aspects of cybersecurity through my work
              as a student intern, including tasks such as networking, linux
              administrative and security testing.
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2021 (Certification)</p>
            <h5>
              PYTHON FOR HACKING<span>
                -
                <a href="https://www.promptinfotech.co.in"
                  >Prompt Infotech</a
                ></span
              >
            </h5>
            <p>
              To learn the basics of computer programming, its core
              methodologies, terminologies and key concepts of Python,
              practising to use the live packages and methods, writing scripts
              for automation, network and vulnerability scanning.
            </p>
          </div>
          <div class="timeline-item">
            <div class="tl-icon">
              <i class="fas fa-briefcase"></i>
            </div>
            <p class="tl-duration">2021 (Certification)</p>
            <h5>
              Ethical Hacking Certification<span>
                -
                <a href="https://hackoversecurity.org/"
                  >HackOverSecurity</a
                ></span
              >
            </h5>
            <p>
              successfully completed and sharpened the skills in computer
              networking, information gathering, identifying security
              misconfiguration, vulnerability analysis, and exploiting network
              and system vulnerabilities to earn experience
            </p>
          </div>
        </div>
      </section>
      <section class="container" id="portfolio">
        <div class="main-title">
          <h2>My <span>Portfolio</span><span class="bg-text">My Work</span></h2>
        </div>
        <p class="port-text">
          Here are some of my notable achievements, showcasing my skills, dedication, and commitment to excellence.
        </p>
        <div class="portfolios">
          <!-- <div class="portfolio-item">
            <div class="image">
              <img src="img/port3.jpg" alt="" />
            </div>
            <div class="hover-items">
              <h3>Project Source</h3>
              <div class="icons">
                <a href="#" class="icon">
                  <i class="fab fa-github"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-behance"></i>
                </a>
                <a href="#" class="icon">
                  <i class="fab fa-youtube"></i>
                </a>
              </div>
            </div>
          </div> -->
          <!-- ---------------------------------- -->
          <div class="portfolio-item">
            <div class="image">
              <img src="img/dasultsystem.jpg" alt="Dassault Systèmes" />
              <div class="hover-overlay">
                <h4>Sales Engineer - Operation 1000</h4>
                <p>Achieved SolidWorks sales at Dassault Systèmes in a competitive market.</p>
              </div>
            </div>
          </div>
          
          <div class="portfolio-item">
            <div class="image">
              <img src="img/ICSS.jpg" alt="ICSS Competition" />
              <div class="hover-overlay">
                <h4>🏆 1st Prize - ICSS CTF</h4>
                <p>Winner of the Indian Cyber Security Solutions Capture The Flag (CTF) competition.</p>
              </div>
            </div>
          </div>
          
          <div class="portfolio-item">
            <div class="image">
              <img src="img/sna.jpeg" alt="Government Yukthi CTF" />
              <div class="hover-overlay">
                <h4>Finalist - Gov. Yukthi CTF</h4>
                <p>Showcased exceptional cybersecurity skills & participated in the final round.</p>
              </div>
            </div>
          </div>
          
          <div class="portfolio-item">
            <div class="image">
              <img src="img/htb.png" alt="Hack The Box" />
              <div class="hover-overlay">
                <h4>Pro Hacker - Hack The Box</h4>
                <p>Achieved Pro Hacker Rank by solving complex cybersecurity challenges.</p>
              </div>
            </div>
          </div>
          
           <!-- ---------------------------------- -->
        </div>
      </section>
      <section class="container" id="blogs">
        <div class="blogs-content">
          <div class="main-title">
            <h2>My <span>Blogs</span><span class="bg-text">My Blogs</span></h2>
          </div>
          <center>
            <!-- <h2>It will be launch soon</h2> -->
            <div>
              Writeups and Walkthrough - <a href="https://blog.blackm4c.xyz" target="_blank">https://blog.blackm4c.xyz</a>
            </div>
          </center>
          <div class="blogs" style="display: none">
            <div class="blog">
              <img src="img/port6.jpg" alt="" />
              <div class="blog-text">
                <h4>How to Create Your Own Website</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
            <div class="blog">
              <img src="img/blog1.jpg" alt="" />
              <div class="blog-text">
                <h4>How to Become an Expert in Web Design</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
            <div class="blog">
              <img src="img/blog2.jpg" alt="" />
              <div class="blog-text">
                <h4>Become a Web Designer in 10 Days</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
            <div class="blog">
              <img src="img/blog3.jpg" alt="" />
              <div class="blog-text">
                <h4>Debbuging made easy with Web Inspector</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
            <div class="blog">
              <img src="img/port1.jpg" alt="" />
              <div class="blog-text">
                <h4>Get started with Web Design and UI Design</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
            <div class="blog">
              <img src="img/port3.jpg" alt="" />
              <div class="blog-text">
                <h4>This is what you need to know about Web Design</h4>
                <p>
                  Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                  Doloribus natus voluptas, eos obcaecati recusandae amet?
                </p>
              </div>
            </div>
          </div>
          
        </div>
      </section>
      <section class="container contact" id="contact">
        <div class="contact-container">
          <div class="main-title">
            <h2>Contact <span>Me</span><span class="bg-text">Contact</span></h2>
          </div>
          <div class="contact-content-con">
            <div class="left-contact">
              <h4>Contact me here</h4>
              <div class="contact-info">
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-map-marker-alt"></i>
                    <span>Location</span>
                  </div>
                  <p>: Bangalore</p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-envelope"></i>
                    <span>Email</span>
                  </div>
                  <p>
                    <span>: nelsonofficialmail@gmail.com</span>
                  </p>
                </div>
                <div class="contact-item">
                  <div class="icon">
                    <i class="fas fa-globe-africa"></i>
                    <span>Languages</span>
                  </div>
                  <p>
                    <span>: English</span>
                  </p>
                </div>
              </div>
              <div class="contact-icons">
                <div class="contact-icon">
                  <a href="https://twitter.com/blackmac_newbie" target="_blank">
                    <i class="fab fa-twitter"></i>
                  </a>
                  <a href="https://discord.gg" target="_blank" id="discord-icon">
                    <i class="fab fa-discord"></i>
                  </a>
                  <a href="https://github.com/blackm4c" target="_blank">
                    <i class="fab fa-github"></i>
                  </a>
                  <a
                    href="https://www.linkedin.com/in/nelson-durairaj"
                    target="_blank"
                  >
                    <i class="fab fa-linkedin"></i>
                  </a>
                  <a
                    href="https://app.hackthebox.com/profile/583376"
                    target="_blank"
                  >
                    <svg
                      class="custom-svg"
                      width="24"
                      height="24"
                      viewBox="0 0 24 24"
                      role="img"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <path
                        d="M11.996 0a1.119 1.119 0 0 0-.057.003.9.9 0 0 0-.236.05.907.907 0 0 0-.165.079L1.936 5.675a.889.889 0 0 0-.445.77v11.111a.889.889 0 0 0 .47.784l9.598 5.541.054.029v.002a.857.857 0 0 0 .083.035l.012.004c.028.01.056.018.085.024.01.001.011.003.016.004a.93.93 0 0 0 .296.015.683.683 0 0 0 .086-.015c.01 0 .011-.002.016-.004a.94.94 0 0 0 .085-.024l.012-.004a.882.882 0 0 0 .083-.035v-.002a1.086 1.086 0 0 0 .054-.029l9.599-5.541a.889.889 0 0 0 .469-.784V6.48l-.001-.026v-.008a.889.889 0 0 0-.312-.676l-.029-.024c0-.002-.01-.005-.01-.007a.899.899 0 0 0-.107-.07L12.453.127A.887.887 0 0 0 11.99 0zm.01 2.253c.072 0 .144.019.209.056l6.537 3.774a.418.418 0 0 1 0 .724l-6.537 3.774a.418.418 0 0 1-.418 0L5.26 6.807a.418.418 0 0 1 0-.724l6.537-3.774a.42.42 0 0 1 .209-.056zm-8.08 6.458a.414.414 0 0 1 .215.057l6.524 3.766a.417.417 0 0 1 .208.361v7.533a.417.417 0 0 1-.626.361l-6.523-3.766a.417.417 0 0 1-.209-.362V9.13c0-.241.196-.414.41-.418zm16.16 0c.215.004.41.177.41.418v7.532a.42.42 0 0 1-.208.362l-6.524 3.766a.417.417 0 0 1-.626-.361v-7.533c0-.149.08-.286.209-.36l6.523-3.767a.415.415 0 0 1 .216-.057z"
                      />
                    </svg>
                  </a>
                  <a href="https://t.me/blackm4c" target="_blank">
                    <i class="fab fa-telegram"></i>
                  </a>
                </div>
              </div>
            </div>
            <div class="right-contact">
              <p style="color:#b2becd">

                Feel free to contact me for discussions on cybersecurity, software development, and hardware solutions. 
                I can assist in transforming your concepts into functional code and provide consultation on CTF challenges. Whether you need strategic advice or hands-on technical expertise, 
                I'm here to support your security and technology initiatives
              </p>
              </div>
          </div>
        </div>
      </section>
    </main>

    <div class="controls">
      <div class="control active-btn" data-id="home">
        <i class="fas fa-home"></i>
      </div>
      <div class="control" data-id="about">
        <i class="fas fa-user"></i>
      </div>
      <div class="control" data-id="portfolio">
        <i class="fas fa-briefcase"></i>
      </div>
      <div class="control" data-id="blogs">
        <i class="far fa-newspaper"></i>
      </div>
      <div class="control" data-id="contact">
        <i class="fas fa-envelope-open"></i>
      </div>
    </div>
    <div class="theme-btn">
      <i class="fas fa-adjust"></i>
    </div>
    <script src="app.js"></script>
    <script>



      document.addEventListener("DOMContentLoaded", () => {


          // Create a div to hold the binary numbers
          const patternElement = document.createElement("div");
          patternElement.id = "pattern";
          document.body.appendChild(patternElement);
          
          // Calculate the number of rows and columns based on screen size
          const rows = Math.ceil(window.innerHeight / 20);
          const cols = Math.ceil(window.innerWidth / 20);
          const binaryElements = [];
          let glowTimeout;
  
          // Generate binary numbers and add them to the pattern div
          for (let i = 0; i < rows * cols; i++) {
              const binary = document.createElement("span");
              binary.classList.add("binary");
              binary.textContent = Math.random() > 0.5 ? "1" : "0";
              patternElement.appendChild(binary);
              binaryElements.push(binary);
          }
  
          // Function to update the glow effect based on cursor position
          function updateGlow(event) {
              clearTimeout(glowTimeout); // Reset the timeout if the cursor moves
              
              binaryElements.forEach((binary) => {
                  const rect = binary.getBoundingClientRect();
                  const dx = rect.left + 10 - event.clientX;
                  const dy = rect.top + 10 - event.clientY;
                  const distance = Math.sqrt(dx * dx + dy * dy);
  
                  if (distance < 120) {
                      binary.style.color = "#00ff66"; // Set neon green color
                      binary.style.opacity = 1 - distance / 120; // Create a fade effect
                      binary.style.fontWeight = "normal";
                      binary.style.transition = "color 0.1s ease-in-out, opacity 0.2s ease-in-out";
                  }
              });
              
              // Start a timer to remove the glow effect after 5 seconds of no movement
              glowTimeout = setTimeout(() => {
                  binaryElements.forEach((binary) => {
                      binary.style.transition = "opacity 2s ease-out";
                      binary.style.opacity = 0;
                  });
              }, 1000);
          }
  
          // Add event listener for mouse movement to trigger the glow effect
          document.addEventListener("mousemove", updateGlow);

          

      });
  </script>


<script>
  document.getElementById("discord-icon").addEventListener("click", function (event) {
    event.preventDefault(); // Prevents immediate navigation
    navigator.clipboard.writeText("@blackm4c").then(() => {
      alert("Discord username copied: @blackm4c");
    }).catch(err => {
      console.error("Failed to copy:", err);
    });
  });
</script>

  <script>
    // HTML Stylus BabelResult Skip Results Iframe
// ——————————————————————————————————————————————————
// TextScramble
// ——————————————————————————————————————————————————

class TextScramble {
  constructor(el) {
    this.el = el
    this.chars = '!<>-_\\/[]{}—=+*^?#________'
    this.update = this.update.bind(this)
  }
  setText(newText) {
    const oldText = this.el.innerText
    const length = Math.max(oldText.length, newText.length)
    const promise = new Promise((resolve) => this.resolve = resolve)
    this.queue = []
    for (let i = 0; i < length; i++) {
      const from = oldText[i] || ''
      const to = newText[i] || ''
      const start = Math.floor(Math.random() * 40)
      const end = start + Math.floor(Math.random() * 40)
      this.queue.push({ from, to, start, end })
    }
    cancelAnimationFrame(this.frameRequest)
    this.frame = 0
    this.update()
    return promise
  }
  update() {
    let output = ''
    let complete = 0
    for (let i = 0, n = this.queue.length; i < n; i++) {
      let { from, to, start, end, char } = this.queue[i]
      if (this.frame >= end) {
        complete++
        output += to
      } else if (this.frame >= start) {
        if (!char || Math.random() < 0.28) {
          char = this.randomChar()
          this.queue[i].char = char
        }
        output += `<span class="dud">${char}</span>`
      } else {
        output += from
      }
    }
    this.el.innerHTML = output
    if (complete === this.queue.length) {
      this.resolve()
    } else {
      this.frameRequest = requestAnimationFrame(this.update)
      this.frame++
    }
  }
  randomChar() {
    return this.chars[Math.floor(Math.random() * this.chars.length)]
  }
}

// ——————————————————————————————————————————————————
// Example
// ——————————————————————————————————————————————————

const phrases = [
'Nelson',
'blackm4c'
  
]

const el = document.querySelector('#changeName')
const fx = new TextScramble(el)

let counter = 0
const next = () => {
  fx.setText(phrases[counter]).then(() => {
    setTimeout(next, 800)
  })
  counter = (counter + 1) % phrases.length
}

next()
  </script>
  </body>
</html>
