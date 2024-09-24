@extends('admin.partials.master')

@section('content')

            <!-- نظرة عامة على الأداء -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-4 mb-6">
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-indigo-600 mb-2">إجمالي المهام</h2>
                    <p class="text-3xl font-bold text-indigo-800">100</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-indigo-600 mb-2">المهام المكتملة</h2>
                    <p class="text-3xl font-bold text-green-600">75</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-indigo-600 mb-2">المهام المتأخرة</h2>
                    <p class="text-3xl font-bold text-red-600">10</p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow">
                    <h2 class="text-lg font-semibold text-indigo-600 mb-2">المهام قيد التنفيذ</h2>
                    <p class="text-3xl font-bold text-yellow-600">15</p>
                </div>
            </div>

            <!-- مؤشرات رئيسية -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">مؤشرات رئيسية (KPIs)</h2>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    <div>
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">الإنتاجية العامة للفريق</h3>
                        <p class="text-2xl font-bold text-indigo-800">85%</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">معدل إكمال المهام</h3>
                        <p class="text-2xl font-bold text-indigo-800">75%</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">معدل التأخير</h3>
                        <p class="text-2xl font-bold text-indigo-800">10%</p>
                    </div>
                    <div>
                        <h3 class="text-lg font-semibold text-indigo-600 mb-2">معدل المهام المكتملة في الوقت المحدد</h3>
                        <p class="text-2xl font-bold text-indigo-800">90%</p>
                    </div>
                </div>
            </div>

            <!-- المهام الأكثر إلحاحًا -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">المهام الأكثر إلحاحًا</h2>
                <ul class="space-y-2">
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">تسليم مشروع العميل</span>
                        <span class="text-red-600">اليوم</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">مراجعة التقرير الشهري</span>
                        <span class="text-yellow-600">غدًا</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">اجتماع فريق التطوير</span>
                        <span class="text-green-600">بعد غد</span>
                    </li>
                </ul>
            </div>

            <!-- التقويم -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">التقويم</h2>
                <div id="calendar" class="grid grid-cols-7 gap-2">
                    <!-- سيتم ملء هذا القسم بواسطة JavaScript -->
                </div>
            </div>
@endsection
