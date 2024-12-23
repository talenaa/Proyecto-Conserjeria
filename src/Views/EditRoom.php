<?php
require_once("Components/layout.php");
?>

<body>
    <?php
    require_once("Components/header.php");
    ?>

    <main>
    <script src="https://cdn.tailwindcss.com"></script>

        <div class="flex items-center justify-center p-12">
            <div class="mx-auto w-full max-w-[550px] bg-white">
                <div class="mb-4 block text-center font-bold text-2xl text-[#07074D]">Edit Report</div>
                <form action="?action=update&id=<?php echo $data['room']->getId() ?>" method="post">
                    <div class="mb-5">
                        <label for="room" class="mb-3 block text-base font-medium text-[#07074D]">
                            Room Issue
                        </label>
                        <input type="text" name="room" id="room" placeholder="Room Issue" required value="<?php echo $data['room']->getRoom() ?>"
                            class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="area" class="mb-3 block text-base font-medium text-[#07074D]">
                            Issue Area
                        </label>
                        <input type="text" name="area" id="area" placeholder="Issue Area" required value="<?php echo $data['room']->getArea() ?>"
                            class="w-full rounded-md border border-[#e0e0e0] bg-gray-50 py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="issue" class="mb-3 block text-base font-medium text-[#07074D]">
                            Issue Description
                        </label>
                        <textarea id="issue" name="issue" rows="4" required class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500" placeholder="Issue Description"><?php echo $data['room']->getIssue() ?></textarea>
                    </div>

                    <div class="mb-5">
                        <label for="dateTime" class="mb-3 block text-base font-medium text-[#07074D]">
                            Date of Issue
                        </label>
                        <input type="datetime-local" name="dateTime" id="dateTime" required value="<?php echo $data['room']->getDateTime() ?>"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                    </div>

                    <div>
                        <button type="reset"
                            class="hover:shadow-form w-full rounded-md bg-rose-400 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                            Reset a report
                        </button>
                        <button
                            class="hover:shadow-form w-full rounded-md bg-emerald-400 py-3 px-8 text-center text-base font-semibold text-white outline-none mt-4">
                            Create A Room Issue
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php
    require_once("Components/footer.php");
    ?>
</body>

</html>