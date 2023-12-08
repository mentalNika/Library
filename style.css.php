<?php
  header('content-type: text/css');
?>

* {
  box-sizing: border-box;
}

/* @font-face {
  font-family: "MPLUSRounded1c-Black";
  src: url(fonts/MPLUSRounded1c-Black.ttf);
  font-weight: 700;
}

@font-face {
font-family: 'M PLUS Rounded 1c', sans-serif;
  src: url(fonts/MPLUSRounded1c-Bold.ttf);
} */

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Black.ttf');
  font-weight: 900;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Bold.ttf');
  font-weight: 700;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-ExtraBold.ttf');
  font-weight: 800;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Light.ttf');
  font-weight: 300;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Medium.ttf');
  font-weight: 500;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Regular.ttf');
  font-weight: 400;
  font-style: normal;
}

@font-face {
  font-family: 'M PLUS Rounded 1c';
  src: url('/fonts/MPLUSRounded1c-Thin.ttf');
  font-weight: 100;
  font-style: normal;
}

html,
body {
  width: 100%;
  height: 100%;
  margin: 0;
}

body {
  font-family: "M PLUS Rounded 1c", sans-serif;
  font-weight: 800;
}

ul,
li,
a,
p,
h1,
h2,
h3,
h4,
h5,
h6,
main,
section {
  margin: 0;
  padding: 0;
  text-decoration: none;
  list-style: none;
}

img {
  max-width: 100%;
  height: auto;
}

.visually-hidden {
  position: absolute;
  width: 1px;
  height: 1px;
  margin: -1px;
  border: 0;
  padding: 0;
  white-space: nowrap;
  clip-path: inset(100%);
  clip: rect(0 0 0 0);
  overflow: hidden;
}

.header {
  margin-bottom: 100px;
  padding: 20px;  
  background-color: #fff;
  border-bottom: 5px #000 solid;
  
}

.header__title {
  color: #000;
  text-align: center;
  font-size: 96px;
  font-weight: 800;
}

.books {
  padding: 0 35px 0 35px;
  background-color: #F9F1BD;
  border-top: 5px #000 solid;
}

.books__title {
  font-size: 64px;
  font-weight: 800;
}

.books__text {
  padding-right: 60px;
  font-size: 48px;
  font-weight: 600;
  line-height: 54px;
}

.books__wrapper {
  display: flex;
}

.books__container {
  display: flex;
  flex-wrap: wrap;
  gap: 30px;
}

.book {
  margin-bottom: 30px;
}

.book__img {
  width: 320px;
  height: 490px;
}

.book__description-list {
  margin-top: 28px;
  padding: 5px 20px;
  padding-bottom: 30px;
  width: 320px;
  background-color: #fff;
}

.book__name {
  font-size: 30px;
  font-weight: 800;
  line-height: 40px;
  text-align: center;
}

.book__author {
  padding: 10px 0 5px 0;
  font-size: 28px;
  font-weight: 500;
  line-height: 30px;
}

.book__pages {
  font-size: 28px;
  font-weight: 500;
  line-height: 30px;
}

.btn {
  margin: 0 auto;
  display: block;
  padding: 10px 0;
  text-align: center;
  width: 225px;
  color: #000;
  font-size: 28px;
  font-weight: 500;
  line-height: 36.59px;
} 

.btn--change {
  margin-top: -20px;
  margin-bottom: 10px;
  background-color: #BABA7C;
}

.btn--change:hover {
  background-color: #999967;
  transition: background-color 0.5s;
}

.btn--delete {
  position: relative;
  background-color: #F28F8C;
  text-align: center;
}

.btn--delete:hover {
  background-color: #dd6d6b;
  transition: background-color 0.5s;
}

.book__icon {
  position: absolute;
  content: "";
  top: -8px;
}


/* МОДАЛЬНОЕ ОКНО ДОБАВИТЬ КНИГУ */

.modal {
  position: fixed;
  left: 0;
  top: 0;
  width: 100%;
  height: 100vh;
  z-index: 999;
  background-color: rgba(0, 0, 0, .3);
  display: grid;
  align-items: center;
  justify-content: center;
  overflow-y: auto;
  visibility: hidden;
  opacity: 0;
  transition: opacity .4s, visibility .4s;
}

.modal.open {
  visibility: visible;
  opacity: 1;
}

/* Если у modal появится open, то применятся следующие настройки для modal__box */

.modal.open .modal__box {
  transform: scale(1);
}

.modal__box {
  position: relative;
  max-width: 800px;
  padding: 45px;
  z-index: 1;
  background-color: #F9F1BD;
  border: 5px #979766 solid;
  box-shadow: 20px 20px 20px -15px rgba(0, 0, 0, 0.3);
  transform: scale(0);
  transition: transform .8s;
}

.modal__close-btn {
  position: absolute;
  content: "";
  top: -10px;
  left: 730px;
  border: none;
  background-color: transparent;
  width: 80px;
  height: 80px;
}

.modal__close-btn:hover svg .str0{
  stroke: #9b0500;
}

.modal__title {
  padding-bottom: 15px;
  text-align: center;
  font-size: 50px;
  font-weight: 800;
}

.modal__text {
  font-size: 40px;
  font-weight: 700;
}

.modal__input {
  margin-bottom: 15px;
  max-width: 600px;
  width: 100%;
  height: 40px;
  font-family: 'M PLUS Rounded 1c', sans-serif;
  font-size: 25px;
  font-weight: 600;
  background-color: #ece19a;
}

.modal__input::placeholder {
  color: #5a5537;
  opacity: 0.5;
}

.btn--add {
  margin-top: 10px;
  font-family: 'M PLUS Rounded 1c', sans-serif;
  background-color: #BABA7C;
}

.btn--add:hover {
  background-color: #999967;
  transition: background-color 0.5s;
}

.add-book {
  padding: 50px 0;
  text-align: center;
  border-top: 5px #000 solid;
  border-bottom: 5px #000 solid;
}

.add-book__btn {
  width: 100%;
  background-color: #ece19a;
  font-family: 'M PLUS Rounded 1c', sans-serif;
  font-size: 64px;
  font-weight: 800;
  border-top: 5px #000 solid;
  border-bottom: 5px #000 solid;
}

.add-book__btn {
  border: 0 solid;
  box-shadow: inset 0 0 20px rgba(255, 255, 255, 0);
  outline: 2px solid;
  outline-color: rgba(173, 171, 0, 0.5);
  outline-offset: 0px;
  text-shadow: none;
  transition: all 1250ms cubic-bezier(0.19, 1, 0.22, 1);
}

.add-book__btn:hover {
  background-color: #BABA7C;
  box-shadow: inset 0 0 20px rgba(255, 251, 0, 0.5), 0 0 20px rgba(255, 251, 0, 0.5);
  outline-color: rgba(255, 255, 255, 0);
  outline-offset: 15px;
}

/* ИЗМЕНИТЬ ОПИСАНИЕ КНИГИ*/

.change-description {
  padding: 35px 0 35px 0;
  background-color: #F9F1BD;
  border-top: 5px #000 solid;
}

.change-description__title {
  text-align: center;
  font-size: 64px;
  font-weight: 800;
}

.change-description__form {
  margin: 0 auto;
  max-width: 700px;
  width: 100%;
}

.change-description__text {
  font-size: 40px;
  font-weight: 700;
}

.change-description__input {
  margin-bottom: 15px;
  width: 100%;
  height: 40px;
  font-family: 'M PLUS Rounded 1c', sans-serif;
  font-size: 25px;
  font-weight: 600;
  background-color: #ece19a;
}

.change-description__img {
  display: block;
  margin: 0 auto;
}

.modal__input::placeholder {
  color: #5a5537;
  opacity: 0.5;
}

.btn--update {
  margin-top: 20px;
  background-color: #BABA7C;
}

.btn--update:hover {
  background-color: #999967;
  transition: background-color 0.5s;
}


/* СОТРУДНИКИ */

.employees {
  padding: 35px;
  background-color: #F9F1BD;
  border-top: 5px #000 solid;
  border-bottom: 5px #000 solid;
}

.employees-table {
  margin-bottom: 100px;
}

.employees-table__title {
  padding: 10px 20px;
  font-size: 56px;
  font-weight: 600;
  background-color: #dfd7a9;
  border: 2px #ddd18ecb solid;
}

.employees-table__text {
  padding: 5px 10px;
  font-size: 40px;
  font-weight: 600;
  background-color: rgb(235, 225, 169);
  border: 2px #dfd7a9 solid;
}

.btn--employee-update {
  background-color: #BABA7C;
}

.btn--employee-update:hover {
  background-color: #999967;
  transition: background-color 0.5s;
}

.btn--employee-delete {
  position: relative;
  background-color: #F28F8C;
  text-align: center;
}

.btn--employee-delete:hover {
  background-color: #dd6d6b;
  transition: background-color 0.5s;
}