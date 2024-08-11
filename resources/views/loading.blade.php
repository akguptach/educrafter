<style>
body,
html {
    margin: 0;
    padding: 0;
}

div.overlay {
    display: table;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    opacity: 0.6;
    z-index: 999;
}

div.overlay>div {
    display: table-cell;
    width: 100%;
    height: 100%;
    background: #4d4747;
    text-align: center;
    vertical-align: middle;

}

.loader {
    border: 16px solid #f3f3f3;
    /* Light grey */
    border-top: 16px solid #3498db;
    /* Blue */
    border-radius: 50%;
    width: 120px;
    height: 120px;
    animation: spin 2s linear infinite;
    margin: 0 auto;
}

@keyframes spin {
    0% {
        transform: rotate(0deg);
    }

    100% {
        transform: rotate(360deg);
    }
}
</style>
<div id="loading_overlay" class="overlay" style="display: none;">
    <div>
        <div class="loader"></div>
    </div>
</div>