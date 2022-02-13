<?php if (!isset($_SESSION['name'])) {
  header('location:index.php?controller=login&action=login');
} ?>
<html>

<head>
  <title> </title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./view/js/tooltip.js"></script>
  <script type="text/javascript" src="./view/js/thickbox-compressed.js"></script>
  <script src="./view/js/java.js" type="text/javascript"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('input.number').keypress(function(e) {
        if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
          return false;
        }
      });
    });
  </script>

  <link href="./App_Themes/abrasive/a10777.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/em.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/jQuery.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/style.css" type="text/css" rel="stylesheet" />
  <link href="./App_Themes/abrasive/thickbox.css" type="text/css" rel="stylesheet" />
  <style type="text/css" data-styled-components="FiaaB gTcftA caPIRE" data-styled-components-is-local="true">
    /* sc-component-id: sc-keyframes-FiaaB */
    @-webkit-keyframes FiaaB {
      100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes FiaaB {
      100% {
        -webkit-transform: rotate(360deg);
        -ms-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    /* sc-component-id: sc-keyframes-gTcftA */
    @-webkit-keyframes gTcftA {

      10%,
      90% {
        -webkit-transform: translate3d(-1px, 0, 0);
        -ms-transform: translate3d(-1px, 0, 0);
        transform: translate3d(-1px, 0, 0);
      }

      20%,
      80% {
        -webkit-transform: translate3d(2px, 0, 0);
        -ms-transform: translate3d(2px, 0, 0);
        transform: translate3d(2px, 0, 0);
      }

      30%,
      50%,
      70% {
        -webkit-transform: translate3d(-4px, 0, 0);
        -ms-transform: translate3d(-4px, 0, 0);
        transform: translate3d(-4px, 0, 0);
      }

      40%,
      60% {
        -webkit-transform: translate3d(4px, 0, 0);
        -ms-transform: translate3d(4px, 0, 0);
        transform: translate3d(4px, 0, 0);
      }
    }

    @keyframes gTcftA {

      10%,
      90% {
        -webkit-transform: translate3d(-1px, 0, 0);
        -ms-transform: translate3d(-1px, 0, 0);
        transform: translate3d(-1px, 0, 0);
      }

      20%,
      80% {
        -webkit-transform: translate3d(2px, 0, 0);
        -ms-transform: translate3d(2px, 0, 0);
        transform: translate3d(2px, 0, 0);
      }

      30%,
      50%,
      70% {
        -webkit-transform: translate3d(-4px, 0, 0);
        -ms-transform: translate3d(-4px, 0, 0);
        transform: translate3d(-4px, 0, 0);
      }

      40%,
      60% {
        -webkit-transform: translate3d(4px, 0, 0);
        -ms-transform: translate3d(4px, 0, 0);
        transform: translate3d(4px, 0, 0);
      }
    }

    /* sc-component-id: sc-keyframes-caPIRE */
    @-webkit-keyframes caPIRE {
      0% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      20% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      40% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      60% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      80% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      100% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }
    }

    @keyframes caPIRE {
      0% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      20% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      40% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      60% {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1);
      }

      80% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }

      100% {
        -webkit-transform: scale(0.75);
        -ms-transform: scale(0.75);
        transform: scale(0.75);
      }
    }
  </style>
  <style>
    @-webkit-keyframes swal2-show {
      0% {
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @keyframes swal2-show {
      0% {
        -webkit-transform: scale(0.7);
        transform: scale(0.7);
      }

      45% {
        -webkit-transform: scale(1.05);
        transform: scale(1.05);
      }

      80% {
        -webkit-transform: scale(0.95);
        transform: scale(0.95);
      }

      100% {
        -webkit-transform: scale(1);
        transform: scale(1);
      }
    }

    @-webkit-keyframes swal2-hide {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @keyframes swal2-hide {
      0% {
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }

      100% {
        -webkit-transform: scale(0.5);
        transform: scale(0.5);
        opacity: 0;
      }
    }

    @-webkit-keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 1.0625em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em;
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em;
      }

      100% {
        top: 2.8125em;
        left: 0.875em;
        width: 1.5625em;
      }
    }

    @keyframes swal2-animate-success-line-tip {
      0% {
        top: 1.1875em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 1.0625em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 2.1875em;
        left: -0.375em;
        width: 3.125em;
      }

      84% {
        top: 3em;
        left: 1.3125em;
        width: 1.0625em;
      }

      100% {
        top: 2.8125em;
        left: 0.875em;
        width: 1.5625em;
      }
    }

    @-webkit-keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em;
      }

      100% {
        top: 2.375em;
        right: 0.5em;
        width: 2.9375em;
      }
    }

    @keyframes swal2-animate-success-line-long {
      0% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      65% {
        top: 3.375em;
        right: 2.875em;
        width: 0;
      }

      84% {
        top: 2.1875em;
        right: 0;
        width: 3.4375em;
      }

      100% {
        top: 2.375em;
        right: 0.5em;
        width: 2.9375em;
      }
    }

    @-webkit-keyframes swal2-rotate-success-circular-line {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    @keyframes swal2-rotate-success-circular-line {
      0% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      5% {
        -webkit-transform: rotate(-45deg);
        transform: rotate(-45deg);
      }

      12% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }

      100% {
        -webkit-transform: rotate(-405deg);
        transform: rotate(-405deg);
      }
    }

    @-webkit-keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      50% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      80% {
        margin-top: -0.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
      }

      100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @keyframes swal2-animate-error-x-mark {
      0% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      50% {
        margin-top: 1.625em;
        -webkit-transform: scale(0.4);
        transform: scale(0.4);
        opacity: 0;
      }

      80% {
        margin-top: -0.375em;
        -webkit-transform: scale(1.15);
        transform: scale(1.15);
      }

      100% {
        margin-top: 0;
        -webkit-transform: scale(1);
        transform: scale(1);
        opacity: 1;
      }
    }

    @-webkit-keyframes swal2-animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1;
      }
    }

    @keyframes swal2-animate-error-icon {
      0% {
        -webkit-transform: rotateX(100deg);
        transform: rotateX(100deg);
        opacity: 0;
      }

      100% {
        -webkit-transform: rotateX(0);
        transform: rotateX(0);
        opacity: 1;
      }
    }

    body.swal2-toast-shown .swal2-container {
      background-color: transparent;
    }

    body.swal2-toast-shown .swal2-container.swal2-shown {
      background-color: transparent;
    }

    body.swal2-toast-shown .swal2-container.swal2-top {
      top: 0;
      right: auto;
      bottom: auto;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown .swal2-container.swal2-top-end,
    body.swal2-toast-shown .swal2-container.swal2-top-right {
      top: 0;
      right: 0;
      bottom: auto;
      left: auto;
    }

    body.swal2-toast-shown .swal2-container.swal2-top-left,
    body.swal2-toast-shown .swal2-container.swal2-top-start {
      top: 0;
      right: auto;
      bottom: auto;
      left: 0;
    }

    body.swal2-toast-shown .swal2-container.swal2-center-left,
    body.swal2-toast-shown .swal2-container.swal2-center-start {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown .swal2-container.swal2-center {
      top: 50%;
      right: auto;
      bottom: auto;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-toast-shown .swal2-container.swal2-center-end,
    body.swal2-toast-shown .swal2-container.swal2-center-right {
      top: 50%;
      right: 0;
      bottom: auto;
      left: auto;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-left,
    body.swal2-toast-shown .swal2-container.swal2-bottom-start {
      top: auto;
      right: auto;
      bottom: 0;
      left: 0;
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom {
      top: auto;
      right: auto;
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-toast-shown .swal2-container.swal2-bottom-end,
    body.swal2-toast-shown .swal2-container.swal2-bottom-right {
      top: auto;
      right: 0;
      bottom: 0;
      left: auto;
    }

    body.swal2-toast-column .swal2-toast {
      flex-direction: column;
      align-items: stretch;
    }

    body.swal2-toast-column .swal2-toast .swal2-actions {
      flex: 1;
      align-self: stretch;
      height: 2.2em;
      margin-top: 0.3125em;
    }

    body.swal2-toast-column .swal2-toast .swal2-loading {
      justify-content: center;
    }

    body.swal2-toast-column .swal2-toast .swal2-input {
      height: 2em;
      margin: 0.3125em auto;
      font-size: 1em;
    }

    body.swal2-toast-column .swal2-toast .swal2-validation-message {
      font-size: 1em;
    }

    .swal2-popup.swal2-toast {
      flex-direction: row;
      align-items: center;
      width: auto;
      padding: 0.625em;
      box-shadow: 0 0 0.625em #d9d9d9;
      overflow-y: hidden;
    }

    .swal2-popup.swal2-toast .swal2-header {
      flex-direction: row;
    }

    .swal2-popup.swal2-toast .swal2-title {
      flex-grow: 1;
      justify-content: flex-start;
      margin: 0 0.6em;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-footer {
      margin: 0.5em 0 0;
      padding: 0.5em 0 0;
      font-size: 0.8em;
    }

    .swal2-popup.swal2-toast .swal2-close {
      position: initial;
      width: 0.8em;
      height: 0.8em;
      line-height: 0.8;
    }

    .swal2-popup.swal2-toast .swal2-content {
      justify-content: flex-start;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon {
      width: 2em;
      min-width: 2em;
      height: 2em;
      margin: 0;
    }

    .swal2-popup.swal2-toast .swal2-icon-text {
      font-size: 2em;
      font-weight: 700;
      line-height: 1em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      top: 0.875em;
      width: 1.375em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      left: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      right: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-actions {
      height: auto;
      margin: 0 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-styled {
      margin: 0 0.3125em;
      padding: 0.3125em 0.625em;
      font-size: 1em;
    }

    .swal2-popup.swal2-toast .swal2-styled:focus {
      box-shadow: 0 0 0 0.0625em #fff, 0 0 0 0.125em rgba(50, 100, 150, 0.4);
    }

    .swal2-popup.swal2-toast .swal2-success {
      border-color: #a5dc86;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 2em;
      height: 2.8125em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border-radius: 50%;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      top: -0.25em;
      left: -0.9375em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 2em 2em;
      transform-origin: 2em 2em;
      border-radius: 4em 0 0 4em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      top: -0.25em;
      left: 0.9375em;
      -webkit-transform-origin: 0 2em;
      transform-origin: 0 2em;
      border-radius: 0 4em 4em 0;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-ring {
      width: 2em;
      height: 2em;
    }

    .swal2-popup.swal2-toast .swal2-success .swal2-success-fix {
      top: 0;
      left: 0.4375em;
      width: 0.4375em;
      height: 2.6875em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'] {
      height: 0.3125em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='tip'] {
      top: 1.125em;
      left: 0.1875em;
      width: 0.75em;
    }

    .swal2-popup.swal2-toast .swal2-success [class^='swal2-success-line'][class$='long'] {
      top: 0.9375em;
      right: 0.1875em;
      width: 1.375em;
    }

    .swal2-popup.swal2-toast.swal2-show {
      -webkit-animation: showSweetToast 0.5s;
      animation: showSweetToast 0.5s;
    }

    .swal2-popup.swal2-toast.swal2-hide {
      -webkit-animation: hideSweetToast 0.2s forwards;
      animation: hideSweetToast 0.2s forwards;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: animate-toast-success-tip 0.75s;
      animation: animate-toast-success-tip 0.75s;
    }

    .swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: animate-toast-success-long 0.75s;
      animation: animate-toast-success-long 0.75s;
    }

    @-webkit-keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-0.625em) rotateZ(2deg);
        transform: translateY(-0.625em) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: 0.5;
      }

      66% {
        -webkit-transform: translateY(0.3125em) rotateZ(2deg);
        transform: translateY(0.3125em) rotateZ(2deg);
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @keyframes showSweetToast {
      0% {
        -webkit-transform: translateY(-0.625em) rotateZ(2deg);
        transform: translateY(-0.625em) rotateZ(2deg);
        opacity: 0;
      }

      33% {
        -webkit-transform: translateY(0) rotateZ(-2deg);
        transform: translateY(0) rotateZ(-2deg);
        opacity: 0.5;
      }

      66% {
        -webkit-transform: translateY(0.3125em) rotateZ(2deg);
        transform: translateY(0.3125em) rotateZ(2deg);
        opacity: 0.7;
      }

      100% {
        -webkit-transform: translateY(0) rotateZ(0);
        transform: translateY(0) rotateZ(0);
        opacity: 1;
      }
    }

    @-webkit-keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: 0.5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @keyframes hideSweetToast {
      0% {
        opacity: 1;
      }

      33% {
        opacity: 0.5;
      }

      100% {
        -webkit-transform: rotateZ(1deg);
        transform: rotateZ(1deg);
        opacity: 0;
      }
    }

    @-webkit-keyframes animate-toast-success-tip {
      0% {
        top: 0.5625em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 0.125em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 0.625em;
        left: -0.25em;
        width: 1.625em;
      }

      84% {
        top: 1.0625em;
        left: 0.75em;
        width: 0.5em;
      }

      100% {
        top: 1.125em;
        left: 0.1875em;
        width: 0.75em;
      }
    }

    @keyframes animate-toast-success-tip {
      0% {
        top: 0.5625em;
        left: 0.0625em;
        width: 0;
      }

      54% {
        top: 0.125em;
        left: 0.125em;
        width: 0;
      }

      70% {
        top: 0.625em;
        left: -0.25em;
        width: 1.625em;
      }

      84% {
        top: 1.0625em;
        left: 0.75em;
        width: 0.5em;
      }

      100% {
        top: 1.125em;
        left: 0.1875em;
        width: 0.75em;
      }
    }

    @-webkit-keyframes animate-toast-success-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0;
      }

      65% {
        top: 1.25em;
        right: 0.9375em;
        width: 0;
      }

      84% {
        top: 0.9375em;
        right: 0;
        width: 1.125em;
      }

      100% {
        top: 0.9375em;
        right: 0.1875em;
        width: 1.375em;
      }
    }

    @keyframes animate-toast-success-long {
      0% {
        top: 1.625em;
        right: 1.375em;
        width: 0;
      }

      65% {
        top: 1.25em;
        right: 0.9375em;
        width: 0;
      }

      84% {
        top: 0.9375em;
        right: 0;
        width: 1.125em;
      }

      100% {
        top: 0.9375em;
        right: 0.1875em;
        width: 1.375em;
      }
    }

    body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
      overflow: hidden;
    }

    body.swal2-height-auto {
      height: auto !important;
    }

    body.swal2-no-backdrop .swal2-shown {
      top: auto;
      right: auto;
      bottom: auto;
      left: auto;
      background-color: transparent;
    }

    body.swal2-no-backdrop .swal2-shown>.swal2-modal {
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top {
      top: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-left,
    body.swal2-no-backdrop .swal2-shown.swal2-top-start {
      top: 0;
      left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-top-end,
    body.swal2-no-backdrop .swal2-shown.swal2-top-right {
      top: 0;
      right: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center {
      top: 50%;
      left: 50%;
      -webkit-transform: translate(-50%, -50%);
      transform: translate(-50%, -50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-left,
    body.swal2-no-backdrop .swal2-shown.swal2-center-start {
      top: 50%;
      left: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-center-end,
    body.swal2-no-backdrop .swal2-shown.swal2-center-right {
      top: 50%;
      right: 0;
      -webkit-transform: translateY(-50%);
      transform: translateY(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom {
      bottom: 0;
      left: 50%;
      -webkit-transform: translateX(-50%);
      transform: translateX(-50%);
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-start {
      bottom: 0;
      left: 0;
    }

    body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,
    body.swal2-no-backdrop .swal2-shown.swal2-bottom-right {
      right: 0;
      bottom: 0;
    }

    .swal2-container {
      display: flex;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      flex-direction: row;
      align-items: center;
      justify-content: center;
      padding: 10px;
      background-color: transparent;
      z-index: 1060;
      overflow-x: hidden;
      -webkit-overflow-scrolling: touch;
    }

    .swal2-container.swal2-top {
      align-items: flex-start;
    }

    .swal2-container.swal2-top-left,
    .swal2-container.swal2-top-start {
      align-items: flex-start;
      justify-content: flex-start;
    }

    .swal2-container.swal2-top-end,
    .swal2-container.swal2-top-right {
      align-items: flex-start;
      justify-content: flex-end;
    }

    .swal2-container.swal2-center {
      align-items: center;
    }

    .swal2-container.swal2-center-left,
    .swal2-container.swal2-center-start {
      align-items: center;
      justify-content: flex-start;
    }

    .swal2-container.swal2-center-end,
    .swal2-container.swal2-center-right {
      align-items: center;
      justify-content: flex-end;
    }

    .swal2-container.swal2-bottom {
      align-items: flex-end;
    }

    .swal2-container.swal2-bottom-left,
    .swal2-container.swal2-bottom-start {
      align-items: flex-end;
      justify-content: flex-start;
    }

    .swal2-container.swal2-bottom-end,
    .swal2-container.swal2-bottom-right {
      align-items: flex-end;
      justify-content: flex-end;
    }

    .swal2-container.swal2-grow-fullscreen>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-self: stretch;
      justify-content: center;
    }

    .swal2-container.swal2-grow-row>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center;
    }

    .swal2-container.swal2-grow-column {
      flex: 1;
      flex-direction: column;
    }

    .swal2-container.swal2-grow-column.swal2-bottom,
    .swal2-container.swal2-grow-column.swal2-center,
    .swal2-container.swal2-grow-column.swal2-top {
      align-items: center;
    }

    .swal2-container.swal2-grow-column.swal2-bottom-left,
    .swal2-container.swal2-grow-column.swal2-bottom-start,
    .swal2-container.swal2-grow-column.swal2-center-left,
    .swal2-container.swal2-grow-column.swal2-center-start,
    .swal2-container.swal2-grow-column.swal2-top-left,
    .swal2-container.swal2-grow-column.swal2-top-start {
      align-items: flex-start;
    }

    .swal2-container.swal2-grow-column.swal2-bottom-end,
    .swal2-container.swal2-grow-column.swal2-bottom-right,
    .swal2-container.swal2-grow-column.swal2-center-end,
    .swal2-container.swal2-grow-column.swal2-center-right,
    .swal2-container.swal2-grow-column.swal2-top-end,
    .swal2-container.swal2-grow-column.swal2-top-right {
      align-items: flex-end;
    }

    .swal2-container.swal2-grow-column>.swal2-modal {
      display: flex !important;
      flex: 1;
      align-content: center;
      justify-content: center;
    }

    .swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal {
      margin: auto;
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-container .swal2-modal {
        margin: 0 !important;
      }
    }

    .swal2-container.swal2-fade {
      transition: background-color 0.1s;
    }

    .swal2-container.swal2-shown {
      background-color: rgba(0, 0, 0, 0.4);
    }

    .swal2-popup {
      display: none;
      position: relative;
      flex-direction: column;
      justify-content: center;
      width: 32em;
      max-width: 100%;
      padding: 1.25em;
      border-radius: 0.3125em;
      background: #fff;
      font-family: inherit;
      font-size: 1rem;
      box-sizing: border-box;
    }

    .swal2-popup:focus {
      outline: 0;
    }

    .swal2-popup.swal2-loading {
      overflow-y: hidden;
    }

    .swal2-popup .swal2-header {
      display: flex;
      flex-direction: column;
      align-items: center;
    }

    .swal2-popup .swal2-title {
      display: block;
      position: relative;
      max-width: 100%;
      margin: 0 0 0.4em;
      padding: 0;
      color: #595959;
      font-size: 1.875em;
      font-weight: 600;
      text-align: center;
      text-transform: none;
      word-wrap: break-word;
    }

    .swal2-popup .swal2-actions {
      flex-wrap: wrap;
      align-items: center;
      justify-content: center;
      margin: 1.25em auto 0;
      z-index: 1;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled] {
      opacity: 0.4;
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover {
      background-image: linear-gradient(rgba(0, 0, 0, 0.1),
          rgba(0, 0, 0, 0.1));
    }

    .swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active {
      background-image: linear-gradient(rgba(0, 0, 0, 0.2),
          rgba(0, 0, 0, 0.2));
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm {
      width: 2.5em;
      height: 2.5em;
      margin: 0.46875em;
      padding: 0;
      border: 0.25em solid transparent;
      border-radius: 100%;
      border-color: transparent;
      background-color: transparent !important;
      color: transparent;
      cursor: default;
      box-sizing: border-box;
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel {
      margin-right: 30px;
      margin-left: 30px;
    }

    .swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after {
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-left: 5px;
      border: 3px solid #999;
      border-radius: 50%;
      border-right-color: transparent;
      box-shadow: 1px 1px 1px #fff;
      content: '';
      -webkit-animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
      animation: swal2-rotate-loading 1.5s linear 0s infinite normal;
    }

    .swal2-popup .swal2-styled {
      margin: 0.3125em;
      padding: 0.625em 2em;
      font-weight: 500;
      box-shadow: none;
    }

    .swal2-popup .swal2-styled:not([disabled]) {
      cursor: pointer;
    }

    .swal2-popup .swal2-styled.swal2-confirm {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #3085d6;
      color: #fff;
      font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled.swal2-cancel {
      border: 0;
      border-radius: 0.25em;
      background: initial;
      background-color: #aaa;
      color: #fff;
      font-size: 1.0625em;
    }

    .swal2-popup .swal2-styled:focus {
      outline: 0;
      box-shadow: 0 0 0 2px #fff, 0 0 0 4px rgba(50, 100, 150, 0.4);
    }

    .swal2-popup .swal2-styled::-moz-focus-inner {
      border: 0;
    }

    .swal2-popup .swal2-footer {
      justify-content: center;
      margin: 1.25em 0 0;
      padding: 1em 0 0;
      border-top: 1px solid #eee;
      color: #545454;
      font-size: 1em;
    }

    .swal2-popup .swal2-image {
      max-width: 100%;
      margin: 1.25em auto;
    }

    .swal2-popup .swal2-close {
      position: absolute;
      top: 0;
      right: 0;
      justify-content: center;
      width: 1.2em;
      height: 1.2em;
      padding: 0;
      transition: color 0.1s ease-out;
      border: none;
      border-radius: 0;
      outline: initial;
      background: 0 0;
      color: #ccc;
      font-family: serif;
      font-size: 2.5em;
      line-height: 1.2;
      cursor: pointer;
      overflow: hidden;
    }

    .swal2-popup .swal2-close:hover {
      -webkit-transform: none;
      transform: none;
      color: #f27474;
    }

    .swal2-popup>.swal2-checkbox,
    .swal2-popup>.swal2-file,
    .swal2-popup>.swal2-input,
    .swal2-popup>.swal2-radio,
    .swal2-popup>.swal2-select,
    .swal2-popup>.swal2-textarea {
      display: none;
    }

    .swal2-popup .swal2-content {
      justify-content: center;
      margin: 0;
      padding: 0;
      color: #545454;
      font-size: 1.125em;
      font-weight: 300;
      line-height: normal;
      z-index: 1;
      word-wrap: break-word;
    }

    .swal2-popup #swal2-content {
      text-align: center;
    }

    .swal2-popup .swal2-checkbox,
    .swal2-popup .swal2-file,
    .swal2-popup .swal2-input,
    .swal2-popup .swal2-radio,
    .swal2-popup .swal2-select,
    .swal2-popup .swal2-textarea {
      margin: 1em auto;
    }

    .swal2-popup .swal2-file,
    .swal2-popup .swal2-input,
    .swal2-popup .swal2-textarea {
      width: 100%;
      transition: border-color 0.3s, box-shadow 0.3s;
      border: 1px solid #d9d9d9;
      border-radius: 0.1875em;
      font-size: 1.125em;
      box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.06);
      box-sizing: border-box;
    }

    .swal2-popup .swal2-file.swal2-inputerror,
    .swal2-popup .swal2-input.swal2-inputerror,
    .swal2-popup .swal2-textarea.swal2-inputerror {
      border-color: #f27474 !important;
      box-shadow: 0 0 2px #f27474 !important;
    }

    .swal2-popup .swal2-file:focus,
    .swal2-popup .swal2-input:focus,
    .swal2-popup .swal2-textarea:focus {
      border: 1px solid #b4dbed;
      outline: 0;
      box-shadow: 0 0 3px #c4e6f5;
    }

    .swal2-popup .swal2-file::-webkit-input-placeholder,
    .swal2-popup .swal2-input::-webkit-input-placeholder,
    .swal2-popup .swal2-textarea::-webkit-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file:-ms-input-placeholder,
    .swal2-popup .swal2-input:-ms-input-placeholder,
    .swal2-popup .swal2-textarea:-ms-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file::-ms-input-placeholder,
    .swal2-popup .swal2-input::-ms-input-placeholder,
    .swal2-popup .swal2-textarea::-ms-input-placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-file::placeholder,
    .swal2-popup .swal2-input::placeholder,
    .swal2-popup .swal2-textarea::placeholder {
      color: #ccc;
    }

    .swal2-popup .swal2-range input {
      width: 80%;
    }

    .swal2-popup .swal2-range output {
      width: 20%;
      font-weight: 600;
      text-align: center;
    }

    .swal2-popup .swal2-range input,
    .swal2-popup .swal2-range output {
      height: 2.625em;
      margin: 1em auto;
      padding: 0;
      font-size: 1.125em;
      line-height: 2.625em;
    }

    .swal2-popup .swal2-input {
      height: 2.625em;
      padding: 0 0.75em;
    }

    .swal2-popup .swal2-input[type='number'] {
      max-width: 10em;
    }

    .swal2-popup .swal2-file {
      font-size: 1.125em;
    }

    .swal2-popup .swal2-textarea {
      height: 6.75em;
      padding: 0.75em;
    }

    .swal2-popup .swal2-select {
      min-width: 50%;
      max-width: 100%;
      padding: 0.375em 0.625em;
      color: #545454;
      font-size: 1.125em;
    }

    .swal2-popup .swal2-checkbox,
    .swal2-popup .swal2-radio {
      align-items: center;
      justify-content: center;
    }

    .swal2-popup .swal2-checkbox label,
    .swal2-popup .swal2-radio label {
      margin: 0 0.6em;
      font-size: 1.125em;
    }

    .swal2-popup .swal2-checkbox input,
    .swal2-popup .swal2-radio input {
      margin: 0 0.4em;
    }

    .swal2-popup .swal2-validation-message {
      display: none;
      align-items: center;
      justify-content: center;
      padding: 0.625em;
      background: #f0f0f0;
      color: #666;
      font-size: 1em;
      font-weight: 300;
      overflow: hidden;
    }

    .swal2-popup .swal2-validation-message::before {
      display: inline-block;
      width: 1.5em;
      min-width: 1.5em;
      height: 1.5em;
      margin: 0 0.625em;
      border-radius: 50%;
      background-color: #f27474;
      color: #fff;
      font-weight: 600;
      line-height: 1.5em;
      text-align: center;
      content: '!';
      zoom: normal;
    }

    @supports (-ms-accelerator: true) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    @media all and (-ms-high-contrast: none),
    (-ms-high-contrast: active) {
      .swal2-range input {
        width: 100% !important;
      }

      .swal2-range output {
        display: none;
      }
    }

    @-moz-document url-prefix() {
      .swal2-close:focus {
        outline: 2px solid rgba(50, 100, 150, 0.4);
      }
    }

    .swal2-icon {
      position: relative;
      justify-content: center;
      width: 5em;
      height: 5em;
      margin: 1.25em auto 1.875em;
      border: 0.25em solid transparent;
      border-radius: 50%;
      line-height: 5em;
      cursor: default;
      box-sizing: content-box;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
      zoom: normal;
    }

    .swal2-icon-text {
      font-size: 3.75em;
    }

    .swal2-icon.swal2-error {
      border-color: #f27474;
    }

    .swal2-icon.swal2-error .swal2-x-mark {
      position: relative;
      flex-grow: 1;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'] {
      display: block;
      position: absolute;
      top: 2.3125em;
      width: 2.9375em;
      height: 0.3125em;
      border-radius: 0.125em;
      background-color: #f27474;
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='left'] {
      left: 1.0625em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-error [class^='swal2-x-mark-line'][class$='right'] {
      right: 1em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-icon.swal2-warning {
      border-color: #facea8;
      color: #f8bb86;
    }

    .swal2-icon.swal2-info {
      border-color: #9de0f6;
      color: #3fc3ee;
    }

    .swal2-icon.swal2-question {
      border-color: #c9dae1;
      color: #87adbd;
    }

    .swal2-icon.swal2-success {
      border-color: #a5dc86;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'] {
      position: absolute;
      width: 3.75em;
      height: 7.5em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
      border-radius: 50%;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='left'] {
      top: -0.4375em;
      left: -2.0635em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 3.75em 3.75em;
      transform-origin: 3.75em 3.75em;
      border-radius: 7.5em 0 0 7.5em;
    }

    .swal2-icon.swal2-success [class^='swal2-success-circular-line'][class$='right'] {
      top: -0.6875em;
      left: 1.875em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      -webkit-transform-origin: 0 3.75em;
      transform-origin: 0 3.75em;
      border-radius: 0 7.5em 7.5em 0;
    }

    .swal2-icon.swal2-success .swal2-success-ring {
      position: absolute;
      top: -0.25em;
      left: -0.25em;
      width: 100%;
      height: 100%;
      border: 0.25em solid rgba(165, 220, 134, 0.3);
      border-radius: 50%;
      z-index: 2;
      box-sizing: content-box;
    }

    .swal2-icon.swal2-success .swal2-success-fix {
      position: absolute;
      top: 0.5em;
      left: 1.625em;
      width: 0.4375em;
      height: 5.625em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
      z-index: 1;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'] {
      display: block;
      position: absolute;
      height: 0.3125em;
      border-radius: 0.125em;
      background-color: #a5dc86;
      z-index: 2;
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='tip'] {
      top: 2.875em;
      left: 0.875em;
      width: 1.5625em;
      -webkit-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .swal2-icon.swal2-success [class^='swal2-success-line'][class$='long'] {
      top: 2.375em;
      right: 0.5em;
      width: 2.9375em;
      -webkit-transform: rotate(-45deg);
      transform: rotate(-45deg);
    }

    .swal2-progresssteps {
      align-items: center;
      margin: 0 0 1.25em;
      padding: 0;
      font-weight: 600;
    }

    .swal2-progresssteps li {
      display: inline-block;
      position: relative;
    }

    .swal2-progresssteps .swal2-progresscircle {
      width: 2em;
      height: 2em;
      border-radius: 2em;
      background: #3085d6;
      color: #fff;
      line-height: 2em;
      text-align: center;
      z-index: 20;
    }

    .swal2-progresssteps .swal2-progresscircle:first-child {
      margin-left: 0;
    }

    .swal2-progresssteps .swal2-progresscircle:last-child {
      margin-right: 0;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep {
      background: #3085d6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline {
      background: #add8e6;
    }

    .swal2-progresssteps .swal2-progressline {
      width: 2.5em;
      height: 0.4em;
      margin: 0 -1px;
      background: #3085d6;
      z-index: 10;
    }

    [class^='swal2'] {
      -webkit-tap-highlight-color: transparent;
    }

    .swal2-show {
      -webkit-animation: swal2-show 0.3s;
      animation: swal2-show 0.3s;
    }

    .swal2-show.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    .swal2-hide {
      -webkit-animation: swal2-hide 0.15s forwards;
      animation: swal2-hide 0.15s forwards;
    }

    .swal2-hide.swal2-noanimation {
      -webkit-animation: none;
      animation: none;
    }

    .swal2-rtl .swal2-close {
      right: auto;
      left: 0;
    }

    .swal2-animate-success-icon .swal2-success-line-tip {
      -webkit-animation: swal2-animate-success-line-tip 0.75s;
      animation: swal2-animate-success-line-tip 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-line-long {
      -webkit-animation: swal2-animate-success-line-long 0.75s;
      animation: swal2-animate-success-line-long 0.75s;
    }

    .swal2-animate-success-icon .swal2-success-circular-line-right {
      -webkit-animation: swal2-rotate-success-circular-line 4.25s ease-in;
      animation: swal2-rotate-success-circular-line 4.25s ease-in;
    }

    .swal2-animate-error-icon {
      -webkit-animation: swal2-animate-error-icon 0.5s;
      animation: swal2-animate-error-icon 0.5s;
    }

    .swal2-animate-error-icon .swal2-x-mark {
      -webkit-animation: swal2-animate-error-x-mark 0.5s;
      animation: swal2-animate-error-x-mark 0.5s;
    }

    @-webkit-keyframes swal2-rotate-loading {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @keyframes swal2-rotate-loading {
      0% {
        -webkit-transform: rotate(0);
        transform: rotate(0);
      }

      100% {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg);
      }
    }

    @media print {
      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) {
        overflow-y: scroll !important;
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden='true'] {
        display: none;
      }

      body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container {
        position: initial !important;
      }
    }
  </style>
  <script src="chrome-extension://mooikfkahbdckldjjndioackbalphokd/assets/prompt.js"></script>
  <style>
    .flex {
      display: flex;
      justify-content: space-between;
    }

    .glot-sub-active {
      color: #1296ba !important;
    }

    .glot-sub-hovered {
      color: #1296ba !important;
    }

    .glot-sub-clzz {
      cursor: pointer;

      line-height: 1.2;
      font-size: 28px;
      color: #ffcc00;
      background: rgba(17, 17, 17, 0.7);
    }

    .glot-sub-clzz:hover {
      color: #1296ba !important;
    }

    .ej-trans-sub {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999999;
      cursor: move;
    }

    .ej-trans-sub>span {
      color: #3cf9ed;
      font-size: 18px;
      text-align: center;
      padding: 0 16px;
      line-height: 1.5;
      background: rgba(32, 26, 25, 0.8);
      text-shadow: 0px 1px 4px black;
      padding: 0 8px;

      line-height: 1.2;
      font-size: 16px;
      color: #0cb1c7;
      background: rgba(67, 65, 65, 0.7);
    }

    .ej-main-sub {
      position: absolute;
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 99999999;
      cursor: move;
      padding: 0 8px;
    }

    .ej-main-sub>span {
      color: white;
      font-size: 20px;
      line-height: 1.5;
      text-align: center;
      background: rgba(32, 26, 25, 0.8);
      text-shadow: 0px 1px 4px black;
      padding: 2px 8px;

      line-height: 1.2;
      font-size: 28px;
      color: #ffcc00;
      background: rgba(17, 17, 17, 0.7);
    }

    .ej-main-sub .glot-sub-clzz {
      background: transparent !important;
    }

    .tran-subtitle>span {
      cursor: pointer;
      padding-left: 10px;
      top: 2px;
      position: relative;
    }

    .tran-subtitle>span>span {
      position: absolute;
      top: -170%;
      background: rgba(0, 0, 0, 0.5);
      font-size: 13px;
      line-height: 20px;
      padding: 2px 8px;
      color: white;
      display: none;
      border-radius: 4px;
      white-space: nowrap;
      left: -50%;
      font-weight: normal;
    }

    .view-icon-copy-main-sub:hover>span,
    .view-icon-edit-sub:hover>span,
    .view-icon-copy-tran-sub:hover>span {
      display: block;
    }

    .tran-subtitle>span>svg {
      width: 16px;
      height: 16px;
      pointer-events: none;
      display: inline-flex !important;
      vertical-align: baseline !important;
    }

    .view-icon-copy-main-sub>svg {
      pointer-events: none;
      color: #ffcc00;
    }

    .view-icon-copy-tran-sub {
      padding-left: 0 !important;
      padding-right: 8px !important;
    }

    .view-icon-copy-tran-sub>svg {
      pointer-events: none;
      color: #0cb1c7;
    }

    .table {
      color:
        #333333;
      /* display:
        table-cell; */
      font-size:
        12px;
      line-height:
        21.6px;
    }

    .btnUpdate {
      color: #fff;
      margin-top: 15px;
      margin-left: 2px;
      padding: 8px 15px;
      border: none;
      border-radius: 5px;
      background-color: rgb(15, 141, 3);
    }

    .btnUpdate:hover {
      /* color: #ccc; */
      cursor: pointer;
      opacity: 0.7;
    }

    .avatar {
      flex: 1;
    }

    .information {
      margin-left: 20px;
      flex: 2;
    }

    .modal-td {
      padding: 20px;
    }
  </style>

</head>

<body>
  <!-- Top -->
  <div id="head">
    <!-- Center COntent -->
    <div class="center">
      <!-- Logo -->
      <div class="logo">
        <img width=" 150px" ; height="150px" src="./App_Themes/abrasive/logo.PNG" alt="">
      </div>
      <!-- End Logo -->
      <!-- User Info -->
      <div class="right">
        <b>Chào
          <span id="ctl00_lbUser" style="color: Red"><?php echo $_SESSION['name']; ?> (<?php
                                                                                        if (isset($_SESSION['msv'])) {
                                                                                          echo $_SESSION['msv'];
                                                                                        } else {
                                                                                          echo $_SESSION['mgv'];
                                                                                        }

                                                                                        ?>)</span></b>
        | <a href="?controller=login&action=doimk">Đổi mật khẩu</a> |
        <a href="?controller=login&action=logout">Đăng xuất</a><br />

        <!-- End User Info -->
        <!-- Menu -->
        <div id="menu">
          <ul>
            <li>
              <a class="active" href="#">Trang chủ sinh viên</a>
            </li>
            <li><a href="http://thanglong.edu.vn/">Trang chủ nhà trường</a></li>
            <li>
              <b><a class="msg" href="#"> Có 0 tin báo mới </a></b>
            </li>
          </ul>
        </div>
        <!-- End Menu -->
      </div>
      <!-- End Center Content -->
    </div>
    <!-- End Top -->
    <!-- Page -->
    <div id="page">
      <div id="left">
        <ul>
          <li>
            <h3 class="title">Toàn trường</h3>

            <ul class="sub-menu" style="display: block">
              <li>
                <a href="#">
                  Thời khóa biểu toàn trường</a>
              </li>
            </ul>
          </li>

          <li>
            <h3 class="title">Góc sinh viên</h3>

            <ul class="sub-menu" style="display: block">
              <li>
                <a href="?controller=personal_information">
                  Thông tin cá nhân</a>
              </li>

              <li><a href="?controller=personal_information&action=DangKyHoc"> Đăng ký học</a></li>

              <li><a href="?controller=personal_information&action=bangdiem"> Bảng điểm</a></li>

              <li>
                <a href="?controller=personal_information&action=lichthisinhvien"> Lịch thi chính thức</a>
              </li>


            </ul>
          </li>

          <li></li>
        </ul>
      </div>