<style>


@import url("https://fonts.googleapis.com/css?family=Cardo:400i|Rubik:400,700&display=swap");
:root {
  --d: 1.2s;
  --e: cubic-bezier(0.19, 1, 0.22, 1);
}

.page-content {
  display:grid;
  align-items: center;
  text-align: center;
  grid-gap: .2.5rem;
  /* padding: .2rem; */
    grid-template-columns: repeat(1, 1fr);
}
@media (min-width: 660px) {
  .page-content {
    grid-template-columns: repeat(2, 1fr);
  }
}
@media (min-width: 800px) {
  .page-content {
    grid-template-columns: repeat(5, 1fr);
  }
}

.cards {
  display: grid;
  /*align-items: flex-end;*/
  overflow: hidden;
  cursor: pointer;
  border-radius: 15px;
  width: 13rem;
  text-align: center;
  color: white;
  border: none;
  transform:  skew(-1deg);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.1), 0 2px 2px rgba(0, 0, 0, 0.1), 0 4px 4px rgba(0, 0, 0, 0.1), 0 8px 8px rgba(0, 0, 0, 0.1), 0 16px 16px rgba(0, 0, 0, 0.1);
}
@media (min-width: 100px) {
  .cards {
  width: 18Xrem;
  }
  .title{
  font-size: .5rem;
  }

  .copy{

  font-size: .4rem;
  }
}
@media (min-width: 600px) {
  .cards {
    height: 200px;
  }
}
.cards:before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 110%;
  background-size: cover;
  background-position: 0 0;
  transition: transform calc(var(--d) * 1.5) var(--e);
  pointer-events: none;
}
.cards:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 200%;
  pointer-events: none;
  background-image: linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.009) 11.7%, rgba(0, 0, 0, 0.034) 22.1%, rgba(0, 0, 0, 0.072) 31.2%, rgba(0, 0, 0, 0.123) 39.4%, rgba(0, 0, 0, 0.182) 46.6%, rgba(0, 0, 0, 0.249) 53.1%, rgba(0, 0, 0, 0.32) 58.9%, rgba(0, 0, 0, 0.394) 64.3%, rgba(0, 0, 0, 0.468) 69.3%, rgba(0, 0, 0, 0.54) 74.1%, rgba(0, 0, 0, 0.607) 78.8%, rgba(0, 0, 0, 0.668) 83.6%, rgba(0, 0, 0, 0.721) 88.7%, rgba(0, 0, 0, 0.762) 94.1%, rgba(0, 0, 0, 0.79) 100%);
  transform: translateY(-50%);
  transition: transform calc(var(--d) * 2) var(--e);
}
.cards:nth-child(1):before {
  background-image: url("<?= $url ?>public/img/web/dp/1.jpg");
}
.cards:nth-child(2):before {
  background-image: url("<?= $url ?>public/img/web/dp/2.jpg");
}
.cards:nth-child(3):before {
  background-image: url("<?= $url ?>public/img/web/dp/3.jpg");
}
.cards:nth-child(4):before {
  background-image: url("<?= $url ?>public/img/web/dp/4.jpg");
}
.cards:nth-child(5):before {
    background-image: url("<?= $url ?>public/img/web/dp/5.jpg");
}
.cards:nth-child(6):before {
    background-image: url("<?= $url ?>public/img/web/dp/6.jpg");
}
.cards:nth-child(7):before {
    background-image: url("<?= $url ?>public/img/web/dp/7.jpg");
}
.cards:nth-child(8):before {
    background-image: url("<?= $url ?>public/img/web/dp/8.jpg");
}
.cards:nth-child(9):before {
    background-image: url("<?= $url ?>public/img/web/dp/9.jpg");
}
.cards:nth-child(10):before {
    background-image: url("<?= $url ?>public/img/web/dp/10.jpg");
}

.content {
  position: relative;
  display: flex;
  flex-direction: column;
  align-items: center;
  width: 100%;height: 100%;
  padding: 1rem;
  transition: transform var(--d) var(--e);
  z-index: 1;
  background-color: rgba(8, 8, 8, 0.8);
}
.content > * + * {
  margin-top: .5rem;
}

.title {
  font-size: .7rem;
  color: rgba(241, 73, 54, 0.829);
  font-weight: 700;
  text-transform: uppercase;
  line-height: 2;

  bottom: -1%;
}

.copy {
  font-size: .8rem;
  font-style:oblique;
  line-height: 2;
  padding: 1rem auto;
}

.crd-link  {
  /* cursor: pointer; */
  margin-top: 1.2rem;
  padding: 0.4rem 1.2rem;
  font-size: .6rem;
  font-weight: lighter;
  text-transform: uppercase;
  color: white;
  background-color: #f14936;
}
.crd-link :hover {
  border: #f14936 1px solid;
  /* background-color: rgba(241, 73, 54, 0.829); */
}
.crd-link :focus {
  outline: 1px dashed yellow;
  outline-offset: 3px;
}

@media (hover: hover) and (min-width: 600px) {
  .cards:after {
    transform: translateY(0);
  }

  .content {
    transform: translateY(calc(100% - 3rem));
  }
  .content > *:not(.title) {
    opacity: 0;
    transform: translateY(1rem);
    transition: transform var(--d) var(--e), opacity var(--d) var(--e);
  }

  .cards:hover,
.cards:focus-within {
    align-items: center;
    transform: scale(1);
  }
  .cards:hover:before,
.cards:focus-within:before {
    transform: translateY(-10%) ;
  }
  .cards:hover:after,
.cards:focus-within:after {
    transform: translateY(-50%);
  background-color: rgba(8, 8, 8, 0.555);
  }
  .cards:hover .content,
.cards:focus-within .content {
    transform: translateY(0) scale(1.15);
  }
  .cards:hover .content > *:not(.title),
.cards:focus-within .content > *:not(.title) {
    opacity: 1;
    transform: translateY(0);
    transition-delay: calc(var(--d) / 8);
  }

  .cards:focus-within:before, .cards:focus-within:after,
.cards:focus-within .content,
.cards:focus-within .content > *:not(.title) {
    transition-duration: 0s;
  }
}
</style>
