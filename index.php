<html>
<title>NMC BANK</title>

<head>
  <link rel="stylesheet" type="text/css" href="css/index.css">
  <link rel="shortcut icon" href="img/White with Round Mint Dental Logo (7).png">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
   
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="script.js" defer></script>
  <style>
    body {
      font-family: verdana, "Helvetica Neue", Helvetica, Arial, sans-serif;
      margin: 0px;
      width: 100%;
      height: 100%;
    }

    .slider {
      margin: 100px;
      border-radius: 40px;
      overflow: hidden;
    }

    .slider .slideimg img {
      width: 20%;
      float: left;
      border-radius: 20px;
    }

    .disclaimer span {
      color: black;
      font-weight: bold;
    }

    .disclaimer p {
      font-size: 11px;
      color: black;
      font-weight: bold;
      box-shadow: 2px 2px 2px rgba(0, 0, 0, 0.5);
      line-height: 25px;
      text-align: justify;
      background-color: #f5f5f5;
      box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.6);
      border-radius: 5px;
      margin: 5px;
      padding: 10px;
    }

    #aboutus {
      border: 4px solid transparent;
      background-clip: padding-box;
      border-image: linear-gradient(to right top, #09aeff, #00bffc, #00cce5, #00d5bc, #00da8b, #00d97d, #00d86d, #00d65c, #00d17d, #00cb97, #00c3a9, #0ebbb3);

      border-image-slice: 1;


      overflow: hidden;
    }

    .about {
      clear: both;
      width: 90%;

      line-height: 25px;
      margin: 0px auto;

      margin-top: 30px;
      text-align: left;
      background-color: #f5f5f5;
      padding: 30px;
      box-shadow: 1px 1px 7px rgba(0, 0, 0, 0.6);

    }

    .about span {
      color: black;
      font-weight: bold;
    }

    .about p {
      font-size: 14px;
      font-size: 0.87em;
      color: black;
      font-weight: bold;
      text-align: justify;
    }

    .about {
      text-decoration: none;
      cursor: pointer;
      color: black;
      transition: background-color 0.3s, color 0.3s;

    }

    .about:hover {
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      color: black;
    }

    .news_events {
      border: 4px solid transparent;
      background-clip: padding-box;
      border-image: linear-gradient(to right top, #09aeff, #00bffc, #00cce5, #00d5bc, #00da8b, #00d97d, #00d86d, #00d65c, #00d17d, #00cb97, #00c3a9, #0ebbb3);
      border-image-slice: 1;

    }

    .news_events {
      font-size: 1em;
      width: 35%;
      margin: 1%;
      margin-left: 3.1%;
      float: left;
      /* padding: 10px; */
      /* background-color: rgb(245, 245, 245); */
      border-bottom: 2px solid black;
    }

    .news_events p {
      color: black;
      text-align: left;
      font-weight: bold;
    }

    .news_events h4 {
      margin-left: 8%;
      font-weight: bold;
    }


    .news_events:hover {
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      color: black;
    }

    .online_services {
      font-size: 1em;
      margin: 1%;
      width: 55%;
      float: left;
      padding-bottom: 5px;
      background-color: #c5d9e2;
      border-bottom: 2px solid black;
      border: 4px solid transparent;
      background-clip: padding-box;
      border-image: linear-gradient(to right top, #09aeff, #00bffc, #00cce5, #00d5bc, #00da8b, #00d97d, #00d86d, #00d65c, #00d17d, #00cb97, #00c3a9, #0ebbb3);
      border-image-slice: 1;

    }

    .online_services:hover {
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      color: black;
    }

    .ebanking_options {
      border: 4px solid transparent;
      background-clip: padding-box;
      border-image: linear-gradient(to right top, #09aeff, #00bffc, #00cce5, #00d5bc, #00da8b, #00d97d, #00d86d, #00d65c, #00d17d, #00cb97, #00c3a9, #0ebbb3);
      border-image-slice: 1;

    }

    .ebanking_options:hover {
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      color: black;
    }

    .disclaimer {
      border: 4px solid transparent;
      background-clip: padding-box;
      border-image: linear-gradient(to right top, #09aeff, #00bffc, #00cce5, #00d5bc, #00da8b, #00d97d, #00d86d, #00d65c, #00d17d, #00cb97, #00c3a9, #0ebbb3);
      border-image-slice: 1;

    }

    .disclaimer:hover {
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      color: black;
    }

    /* chat bot */
    .chatbot-toggler {
      position: fixed;
      bottom: 30px;
      right: 35px;
      outline: none;
      border: none;
      height: 50px;
      width: 50px;
      display: flex;
      cursor: pointer;
      align-items: center;
      justify-content: center;
      border-radius: 50%;
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      transition: all 0.2s ease;
    }

    body.show-chatbot .chatbot-toggler {
      transform: rotate(90deg);
    }

    .chatbot-toggler span {
      color: black;
      position: absolute;
    }

    .chatbot-toggler span:last-child,
    body.show-chatbot .chatbot-toggler span:first-child {
      opacity: 0;
    }

    body.show-chatbot .chatbot-toggler span:last-child {
      opacity: 1;
    }

    .chatbot {
      position: fixed;
      right: 35px;
      bottom: 90px;
      width: 420px;
      background: #fff;
      border-radius: 15px;
      overflow: hidden;
      opacity: 0;
      pointer-events: none;
      transform: scale(0.5);
      transform-origin: bottom right;
      box-shadow: 0 0 128px 0 rgba(0, 0, 0, 0.1),
        0 32px 64px -48px rgba(0, 0, 0, 0.5);
      transition: all 0.1s ease;
    }

    body.show-chatbot .chatbot {
      opacity: 1;
      pointer-events: auto;
      transform: scale(1);
    }

    .chatbot header {
      padding: 16px 0;
      position: relative;
      text-align: center;
      color: #fff;
      background-image: linear-gradient(to right top, #04cbff, #75c0f1, #9ab7dc, #abb0c4, #adadad);
      box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    .chatbot header span {
      position: absolute;
      right: 15px;
      top: 50%;
      display: none;
      cursor: pointer;
      transform: translateY(-50%);
    }

    header h2 {
      font-size: 1.4rem;
      color: black;
    }

    .chatbot .chatbox {
      overflow-y: auto;
      height: 400px;
      background-color: black;
      padding: 30px 20px 100px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar {
      width: 6px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-track {
      background: #fff;
      border-radius: 25px;
    }

    .chatbot :where(.chatbox, textarea)::-webkit-scrollbar-thumb {
      background: #ccc;
      border-radius: 25px;
    }

    .chatbox .chat {
      display: flex;
      list-style: none;
    }

    .chatbox .outgoing {
      margin: 20px 0;
      justify-content: flex-end;
    }

    .chatbox .incoming span {
      width: 32px;
      height: 32px;
      color: #fff;
      cursor: default;
      text-align: center;
      line-height: 32px;
      align-self: flex-end;
      background: #724ae8;
      border-radius: 4px;
      margin: 0 10px 7px 0;
    }

    .chatbox .chat p {
      white-space: pre-wrap;
      padding: 12px 16px;
      border-radius: 10px 10px 0 10px;
      max-width: 75%;
      color: #fff;
      font-size: 0.95rem;
      background: black;
    }

    .chatbox .incoming p {
      border-radius: 10px 10px 10px 0;

    }

    .chatbox .chat p.error {
      color: #721c24;
      background: #f8d7da;
    }

    .chatbox .incoming p {
      color: white;
      background: black;
    }

    .chatbot .chat-input {
      display: flex;
      gap: 5px;
      position: absolute;
      bottom: 0;
      width: 100%;
      background: #fff;
      padding: 3px 20px;
      border-top: 1px solid #ddd;
      background-color: black;
    }

    .chat-input textarea {
      height: 55px;
      width: 100%;
      border: none;
      outline: none;
      resize: none;
      max-height: 180px;
      padding: 15px 15px 15px 0;
      font-size: 0.95rem;
      color: white;
      background-color: black;
    }

    .chat-input span {
      align-self: flex-end;
      color: #724ae8;
      cursor: pointer;
      height: 55px;
      display: flex;
      align-items: center;
      visibility: hidden;
      font-size: 1.35rem;
    }

    .chat-input textarea:valid~span {
      visibility: visible;
    }

    @media (max-width: 490px) {
      .chatbot-toggler {
        right: 20px;
        bottom: 20px;
      }

      .chatbot {
        right: 0;
        bottom: 0;
        height: 100%;
        border-radius: 0;
        width: 100%;
      }

      .chatbot .chatbox {
        height: 90%;
        padding: 25px 15px 100px;
      }

      .chatbot .chat-input {
        padding: 5px 15px;
      }

      .chatbot header span {
        display: block;
      }
    }
    
    
  </style>
</head>

<body>
  <?php include 'header.php' ?>
  <div class="index_container">
    <div class="slider">
      <div class="slideimg">
        <img src="img/s11.png">
        <img src="img/s2.png">
        <img src="img/s3.png">
        <img src="img/s4.png">
        <img src="img/s5.png">
      </div>
    </div><br>
    <!-- <div class="newsroom">
        
        <marquee class="marquee_news" scrolldelay="20"><p class="newsfeed"><span>Your bank may charge you for closing a bank account. 
        Bank also charges you when you close your account within a particular time period.</span><span>SBI cuts deposit rates; PPF to fetch lower interest rate. </span><span>No, it is not mandatory to link your bank account with CITIZENSHIP card</span></p></marquee>
    </div><br><br> -->



    <div class="news_events">
      <h4>Tips | Updates | Events</h4><br>
      <ul>
        <p>First, open an account. Then apply for a debit card to get further details.
        </p><br>
        <p>And finally, proceed for Internet Banking Registration to create your internet banking account.

        </p>
        <br>
      </ul>
    </div>


    <div class="online_services">
      <h4>Online Services</h4>
      <ul>
        <a href="customer_reg_form.php">
          <li>Open Account</li>
        </a>
        <a href="debit_card_form.php">
          <li>Apply Debit Card</li>
        </a><br>
        <a href="#" id="ebanking">
          <li>
            <div class="ebanking">Internet Banking
              <div class="ebanking_options">
                <ul>
                  <a href="customer_login.php">
                    <li>Login </li>
                  </a>
                  <a href="ebanking_reg_form.php">
                    <li>Register</li>
                  </a>
                </ul>
              </div>
            </div>
          </li>
        </a>
        <a href="qr_scan.php">
          <li>QR Scan</li>
        </a><br>
      </ul>

    </div>

    <div id="aboutus" class="about"><span>About Us</span><br><br>
      <p>NMC Bank equips colleges with essential financial management tools like internet banking, debit card services,
        and QR card payments. Internet banking enables secure real-time account management and transaction monitoring
        from any location. Debit cards streamline purchases, payments, and withdrawals both online and offline. QR card
        payments simplify transactions, ensuring swift and secure payments. NMC Bank provides dedicated support for
        inquiries, technical issues, and financial guidance, empowering colleges to focus on their core mission of
        education delivery.
      </p>
    </div>

    <div class="disclaimer">
      <span>Disclaimer !!</spasn><br><br>
        <p>Our bank does not ask for the details of your account/PIN/password. Therefore any one pretending to
          be asking you for information from the bank/technical team may be fraudulent entities, so please
          beware.</p>
        <p>You should know how to operate net transactions and if you are not familiar you may refrain from
          doing so. You may seek bank's guidance in this regard. Bank is not responsible for online
          transactions going wrong.</p>
        <p>We shall also not be responsible for wrong transactions and wanton disclosure of details by you.
          Viewing option and transaction option on the net are different. You may exercise your option
          diligently.</p>
    </div>


  </div>
  <!-- <button class="chatbot-toggler">
    <span class="material-symbols-rounded"></span>
    <span class="material-symbols-outlined">close</span>
</button>

<div class="chatbot">
    <header>
        <h2>NMCBOT</h2>
        <span class="close-btn material-symbols-outlined">close</span>
    </header>
    <ul class="chatbox">
        <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋<br>How can I help you today?</p>
        </li>
    </ul>
    <div class="chat-input">
        <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
        <span id="send-btn" class="material-symbols-rounded">send</span>
    </div>
</div> -->

<script src="script.js" defer></script>

</body>

<?php include 'footer.php'; ?>
</body>

</html>