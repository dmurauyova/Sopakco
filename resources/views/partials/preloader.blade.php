<div class="preloader">
  <svg viewBox="0 0 50 50">
    <circle cx="25" cy="25" r="20"></circle>
  </svg>
</div>

<style>
.preloader {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    opacity: 1;
    background-color: #fff;
    transition: opacity 0.1s ease-out; /* Add a CSS transition */
}

.preloader.fade-out {
    opacity: 0; /* Set the opacity to 0 to trigger the transition */
    pointer-events: none; /* Disable pointer events to prevent clicks on the preloader */
}
  @keyframes spin {
    100% {
      rotate: 360deg;
    }
  }
  .preloader svg {
    min-width: 50px;
    min-height: 50px;
    max-width: 100px;
    max-height: 100px;
    width: 20vw;
    height: 20vw;
    animation: spin 1s linear infinite;
  }
  @keyframes dash {
    0% {
      stroke-dasharray: 1, 150;
      stroke-dashoffset: 0;
    }
    50% {
      stroke-dasharray: 90, 150;
      stroke-dashoffset: -35;
    }
    100% {
      stroke-dasharray: 90, 150;
      stroke-dashoffset: -124;
    }
  }
  .preloader circle {
    fill: none;
    stroke: rgb(var(--sopakcoDarkBlue));
    stroke-width: 3px;
    stroke-linecap: round;
    animation: dash 2.5s ease-in-out infinite;
  }
</style>
