<style>

    .preloader {
        align-items: center;
        display: flex;
        height: 100%;
        justify-content: center;
        left: 0;
        position: fixed;
        top: 0;
        width: 100%;
    }

    .loaded.preloader {
        opacity: 0;
        transition: 1.5s ease-in;
    }

    .loader-section {
        height: 100%;
        position: fixed;
        transition: 1s ease-in all;
        top: 0;
        width: 50%;
        border-radius: 1%;
    }

    .section-left {
        background-color: rgba(0, 0, 0, 0.8);
        border: 2px #fff solid;
        opacity: .99;
        left: 0;
        border-radius: 1%;
    }

    .section-right {
        background-color: rgba(0, 0, 0, 0.8);
        /* border: 2px #fff solid; */
        opacity: .99;
        right: 0;
    }

    .loaded .loader-section.section-left {
        transform: translateX(-100%);
        transition: 1s ease-in all;
    }

    .loaded .loader-section.section-right {
        transform: translateX(100%);
        transition: 1s ease-in all;
    }

    .spinner {
        animation: spinner 2s infinite linear;
        border: 2px solid rgba(0, 0, 0, 0.7);
        border-radius: 50%;
        border-top-color: rgb(255, 255, 255);
        background-color: rgba(255, 255, 255, 1);
        height: 8.5em;
        position: fixed;
        width: 8.5em;
        z-index: 1000;
    }

    .icon {
        z-index: 1001;
        color: rgba(0, 0, 0, 0.7);
        font-size: 4.8em;
        position: fixed;
        animation: fade 1s ease-in;
    }


    @keyframes spinner {
        to {
            transform: rotateZ(360deg);
        }
    }
    @keyframes fade {
        to {
            transform: scale(1);
        }
    }
</style>
<div id="preloader" class="preloader bg-0">
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
    <div class="spinner">
    </div>
    <i class="fa-solid fa-globe icon animate__animated animate__heartBeat animate__infinite infinite" aria-hidden="true"></i>
</div>


<script>
    setTimeout(function() {
		$('#preloader').addClass('loaded');
		setTimeout(() => {
            $('#app').removeAttr('hidden');
        }, 1500);
	}, 1200);
</script>
