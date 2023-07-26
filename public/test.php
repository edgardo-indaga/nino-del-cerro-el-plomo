<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Example Horizontal Tabs</title>
    <!-- Enlace al archivo CSS de Tailwind CSS -->
    <?php include 'assets/layout/head.php'; ?>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tab-content {

        }

        input[type="radio"]:checked + label {
            border-color: #4F46E5;
            color: red;
        }

        input[type="radio"]:checked + label + .tab-content {
            display: block;
        }
    </style>

</head>
<body>
<div class="container mx-auto px-4 mt-8">
    <!-- Aquí estarán las tabs horizontales -->
    <div class="flex border-b border-gray-300">
        <!-- Tab 1 - Estacion 1 -->
        <input type="radio" name="tabs" id="tab1" class="hidden" checked>
        <label for="tab1" class="py-2 px-4 cursor-pointer font-semibold">Estacion 1</label>

        <!-- Tab 2 - Estacion 2 -->
        <input type="radio" name="tabs" id="tab2" class="hidden">
        <label for="tab2" class="py-2 px-4 cursor-pointer font-semibold">Estacion 2</label>

        <!-- Tab 3 - Estacion 3 -->
        <input type="radio" name="tabs" id="tab3" class="hidden">
        <label for="tab3" class="py-2 px-4 cursor-pointer font-semibold">Estacion 3</label>

        <!-- Tab 4 - Estacion 4 -->
        <input type="radio" name="tabs" id="tab4" class="hidden">
        <label for="tab4" class="py-2 px-4 cursor-pointer font-semibold">Estacion 4</label>
    </div>

    <!-- Contenido de las tabs -->
    <div class="tab-content mt-4">
        <!-- Contenido de la estación 1 -->
        <div class="hidden" id="tab-content1">
            <p>Contenido de la estación 1.</p>
        </div>

        <!-- Contenido de la estación 2 -->
        <div class="hidden" id="tab-content2">
            <p>Contenido de la estación 2.</p>
        </div>

        <!-- Contenido de la estación 3 -->
        <div class="hidden" id="tab-content3">
            <p>Contenido de la estación 3.</p>
        </div>

        <!-- Contenido de la estación 4 -->
        <div class="hidden" id="tab-content4">
            <p>Contenido de la estación 4.</p>
        </div>
    </div>
</div>
<script>
    const tabs = document.querySelectorAll('input[name="tabs"]');
    tabs.forEach(tab => {
        tab.addEventListener('change', () => {
            const tabContent = document.querySelectorAll('.tab-content');
            tabContent.forEach(content => {
                content.classList.add('hidden');
            });
            const target = document.querySelector(`#${tab.id}-content`);
            target.classList.remove('hidden');
        });
    });
</script>
<!-- PRE-FOOTER & FOOTER -->

</body>
</html>
