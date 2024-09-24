<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>لوحة التحكم</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>
</head>
<body class="bg-indigo-100">
    <div class="flex">
        <!-- Sidebar -->
        <div class="w-64 h-screen bg-indigo-800 text-white p-6">
            <h2 class="text-2xl font-bold mb-6">لوحة التحكم</h2>
            <ul class="space-y-4">
                <li>
                    <a href="index.html" class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-tachometer-alt"></i>
                        <span>لوحة القيادة</span>
                    </a>
                </li>
                <li>
                    <a href="user-management.html" class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-users"></i>
                        <span>إدارة المستخدمين</span>
                    </a>
                </li>
                <li>
                    <a href="project-manage.html" class="flex items-center space-x-2 space-x-reverse">
                        <i class="fas fa-project-diagram"></i>
                        <span>إدارة الفرق والمشاريع</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-indigo-800 mb-12">لوحة القيادة الرئيسية</h1>

             @yield('content')
        </div>
    </div>

    <script>
        // إنشاء التقويم
        const calendar = document.getElementById('calendar');
        const daysOfWeek = ['الأحد', 'الاثنين', 'الثلاثاء', 'الأربعاء', 'الخميس', 'الجمعة', 'السبت'];

        // إضافة أيام الأسبوع
        daysOfWeek.forEach(day => {
            const dayElement = document.createElement('div');
            dayElement.textContent = day;
            dayElement.className = 'text-center font-bold text-indigo-600';
            calendar.appendChild(dayElement);
        });

        // إضافة أيام الشهر
        for (let i = 1; i <= 30; i++) {
            const dayElement = document.createElement('div');
            dayElement.textContent = i;
            dayElement.className = 'text-center p-2 border border-indigo-200 rounded';

            // إضافة بعض المهام العشوائية للتوضيح
            if (i % 5 === 0) {
                const taskElement = document.createElement('div');
                taskElement.textContent = 'مهمة';
                taskElement.className = 'text-xs bg-indigo-200 text-indigo-800 rounded px-1 mt-1';
                dayElement.appendChild(taskElement);
            }

            calendar.appendChild(dayElement);
        }
    </script>
</body>
</html>
