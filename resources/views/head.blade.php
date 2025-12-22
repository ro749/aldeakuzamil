<head>
    @include('listing-utils::head')
    @push('styles')
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" id="bootstrap">
    <link href="css/plugins.css" rel="stylesheet" type="text/css" >
    <link href="css/swiper.css" rel="stylesheet" type="text/css" >
    <link href="css/style.css" rel="stylesheet" type="text/css" >
    <link href="css/coloring.css" rel="stylesheet" type="text/css" >
    <!-- custom-css -->
    <link href="css/swiper-custom-1.css" rel="stylesheet" type="text/css" >
    <link href="css/datepicker.css" rel="stylesheet" type="text/css" >
    <!-- color scheme -->
    <link id="colors" href="css/colors/scheme-01.css" rel="stylesheet" type="text/css" >
    <style>
        .plan-title, .plan-line-desc {
            color: black;
        }
        #plan-div-5 {
            width: 50%;
            margin: 0;
        }
        .financial-projection input{
            color: white !important;
        }
.financial-projection .container {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 60px;
    }

    .financial-projection .section {
      margin-bottom: 25px;
    }

    .financial-projection .section-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .financial-projection .row {
      display: grid;
      grid-template-columns: 70% 30%;
      padding: 4px 0;
    }

    .financial-projection .label {
      text-align: left;
    }

    .financial-projection .value {
      text-align: right;
    }

    .financial-projection .bold {
      font-weight: bold;
    }

    .financial-projection .line {
      border-top: 1px solid #000;
      margin-top: 6px;
      padding-top: 6px;
    }

    .financial-projection .note {
      font-size: 12px;
      margin-top: 8px;
    }

    .financial-projection .footer {
      margin-top: 40px;
      font-size: 12px;
    }

    .financial-projection input:focus {
      background-color: inherit !important;
    }

    .financial-projection input[type=number] {
      -moz-appearance: textfield;
    }

    .financial-projection input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    #contact{
      background-color: rgb(255 255 255) !important;
    }
    </style>
    @endpush
    @stack('styles')
</head>