<?php include __DIR__ . '../layouts/header.php'; ?>

<main class="my-5">
    <div class="d-flex justify-content-center text-white">
        <div class="text-center">
            <h1 class="mb-3 text-secondary display-3">Password Generator</h1>
            <button class="btn btn-primary" type="button" id="btnPasswordGenerate">Generate</button>
            <div class="mt-4 text-secondary" id="passwordContent">
            </div>
        </div>
</main>

<?php push_script('<script src="https://cdn.jsdelivr.net/npm/password-generator@2.3.2/lib/password-generator.min.js"></script>'); ?>

<?php push_script('<script src="/public/js/password-generator.js"></script>'); ?>

<?php include __DIR__ . '../layouts/footer.php'; ?>