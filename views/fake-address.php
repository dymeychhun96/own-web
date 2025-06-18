<?php include __DIR__ . '../layouts/header.php'; ?>
<main class="my-5">
    <div class="container">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="fw-bold fs-5">Person Profile</th>
                </tr>
            </thead>
            <tbody id="personProfile">
                <tr>
                    <td rowspan="2" class="text-center">No information!</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col" colspan="2" class="fw-bold fs-5">US Address</th>
                </tr>
            </thead>
            <tbody id="personAddress">
                <tr>
                    <td rowspan="2" class="text-center">No information!</td>
                </tr>
            </tbody>
        </table>
    </div>
</main>

<?php push_script('<script type="module" src="/public/js/fake-address.js"></script>'); ?>

<?php push_script('<script src="/public/js/random-address.js"></script>'); ?>

<?php include __DIR__ . '../layouts/footer.php'; ?>