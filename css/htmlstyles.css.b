
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
      -ms-text-size-adjust: 100%;
}


body {
  padding-top: 20px;
  padding-bottom: 20px;
}

.header,
.marketing,
.footer {
  padding-left: 15px;
  padding-right: 15px;
}

.header {
  border-bottom: 1px solid #e5e5e5;
}

.header h3 {
  margin-top: 0;
  margin-bottom: 0;
  line-height: 40px;
  padding-bottom: 19px;
}

.footer {
  padding-top: 19px;
  color: #777;
  border-top: 1px solid #e5e5e5;
}

.container-narrow {
  margin: 0 auto;
  max-width: 1000px;
}
.container-narrow > hr {
  margin: 30px 0;
}


.jumbotron {
  text-align: center;
  border-bottom: solid #ffe5e5;
}
.jumbotron .btn {
  font-size: 21px;
  padding: 14px 24px;
}

/* Supporting marketing content */
.marketing {
  margin: 40px 0;
}
.marketing p + h4 {
  margin-top: 28px;
}

/* Responsive: Portrait tablets and up */
@media screen and (min-width: 768px) {
  /* Remove the padding we set earlier */
  .header,
  .marketing,
  .footer {
    padding-left: 0;
    padding-right: 0;
  }
  /* Space out the masthead */
  .header {
    margin-bottom: 30px;
  }
  /* Remove the bottom border on the jumbotron for visual effect */
  .jumbotron {
    border-bottom: 0;
  }
}

.jumbotron {
  padding: 10px;
  margin-bottom: 10px;
  font-size: 21px;
  font-weight: 100;
  line-height: 2.1428571435;
  color: inherit;
  background-color: #043a47;
}


.response {
  padding: 5px;
  margin-bottom: 10px;
  font-size: 20px;
  font-weight: 0;
  line-height: 1;
  color: inherit;
  background-color: #02151A;
}

.searchheader {
  padding: 5px;
  margin-bottom: 10px;
  font-size: 20px;
  font-weight: 0;
  line-height: 1;
  color: inherit;
  background-color: #AAAA1A;
}


.jumbotron h1 {
  line-height: 1;
  color: inherit;
}

.jumbotron p {
  line-height: 1.4;
}


@media screen and (min-width: 768px) {
  .jumbotron {
    padding: 10px 10px;
    border-radius: 2px;
  }
  
  .response {
    padding: 10px 10px;
    border-radius: 2px;
  }
  
  .searchheader {
    padding: 10px 10px;
    border-radius: 2px;
  }
  .jumbotron h1 {
    font-size: 63px;
  }
}