<?php include __DIR__ . '../layouts/header.php'; ?>

<main class="my-5">
    <div class="d-flex justify-content-center text-white">
        <div class="text-center">
            <h1 class="mb-3 text-secondary display-3">Two-Factor Authentication</h1>
            <form>
                <div class="form-group">
                    <input type="text" name="secretCode" id="secretCode" class="form-control form-lg"
                        placeholder="Enter your secret code">
                </div>
                <button type="button" class="btn btn-primary mt-3" id="btnGenerate">Generate</button>
            </form>

            <div class="mt-4 text-secondary">
                <p class="my-3">
                    <i class="fa-regular fa-clock"></i>
                    <span id="timeRemaining">--</span> secords
                </p>
                <p class="fw-bold fs-3" id="token"></p>
            </div>
        </div>
</main>

<?php push_script('<script src="/public/js/2fa.js"></script>'); ?>

<?php include __DIR__ . '../layouts/footer.php'; ?>