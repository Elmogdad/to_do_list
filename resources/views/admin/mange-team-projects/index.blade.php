@extends('admin.partials.master')

@section('content')
<div class="overflow-x-auto bg-white p-6 rounded-lg shadow mb-6">
            <table class="min-w-full bg-white border border-indigo-700">
                <thead>
                    <tr class="bg-indigo-700 text-white">
                        <th class="py-3 px-4 text-right border-b">#</th>
                        <th class="py-3 px-4 text-right border-b">اسم المستخدم</th>
                        <th class="py-3 px-4 w text-right border-b">البريد الإلكتروني</th>

                        <th class="py-3 px-4 text-right border-b">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>


@if(count($projects) > 0)
                        @foreach ($projects as $key => $project )
                        <tr class="border-b">
                        <td class="py-3 px-4 text-right">{{$loop->iteration}}</td>
                        <td class="py-3 px-4 text-right">{{$project->name}}</td>
                        <td class="py-3 px-4 text-right">{{$project->details}}</td>

                        <td class="py-3 px-4 text-right">
                            <button class="bg-indigo-500 text-white py-1 px-3 rounded">تعديل</button>
                            <button class="bg-red-500 text-white py-1 px-3 rounded">حذف</button>

                        @endforeach
                        </td>
                    </tr>
                    @else
                    <tr>
                    <div class="bg-red-200 mt-8 text-gr w-full">No record Found</div>
                    </tr>

                        @endif
                </tbody>
            </table>
        </div>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-indigo-800 mb-6">إدارة الفرق والمشاريع</h1>

            <!-- إضافة فريق جديد -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">إضافة فريق جديد</h2>
                <form class="space-y-4">
                    <div>
                        <label for="team-name" class="block text-indigo-600 mb-2">اسم الفريق</label>
                        <input type="text" id="team-name" class="w-full p-2 border border-indigo-300 rounded">
                    </div>
                    <div>
                        <label for="team-members" class="block text-indigo-600 mb-2">أعضاء الفريق</label>
                        <select id="team-members" multiple class="w-full p-2 border border-indigo-300 rounded">
                            <option value="1">أحمد محمد</option>
                            <option value="2">فاطمة علي</option>
                            <option value="3">محمود خالد</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">إضافة الفريق</button>
                </form>
            </div>

            <!-- تعيين المهام -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">تعيين المهام</h2>
                <form class="space-y-4">
                    <div>
                        <label for="task-name" class="block text-indigo-600 mb-2">اسم المهمة</label>
                        <input type="text" id="task-name" class="w-full p-2 border border-indigo-300 rounded">
                    </div>
                    <div>
                        <label for="task-description" class="block text-indigo-600 mb-2">وصف المهمة</label>
                        <textarea id="task-description" class="w-full p-2 border border-indigo-300 rounded"></textarea>
                    </div>
                    <div>
                        <label for="task-assignee" class="block text-indigo-600 mb-2">تعيين إلى</label>
                        <select id="task-assignee" class="w-full p-2 border border-indigo-300 rounded">
                            <option value="">اختر فريق أو مستخدم</option>
                            <optgroup label="الفرق">
                                <option value="team1">فريق التطوير</option>
                                <option value="team2">فريق التسويق</option>
                            </optgroup>
                            <optgroup label="المستخدمين">
                                <option value="user1">أحمد محمد</option>
                                <option value="user2">فاطمة علي</option>
                            </optgroup>
                        </select>
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">تعيين المهمة</button>
                </form>
            </div>

            <!-- أداء الفرق -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">أداء الفرق</h2>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead>
                            <tr class="bg-indigo-200">
                                <th class="p-2">اسم الفريق</th>
                                <th class="p-2">المهام المكتملة</th>
                                <th class="p-2">المهام المتأخرة</th>
                                <th class="p-2">نسبة الإنجاز</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2">فريق التطوير</td>
                                <td class="p-2">15</td>
                                <td class="p-2">2</td>
                                <td class="p-2">88%</td>
                            </tr>
                            <tr class="bg-indigo-100">
                                <td class="p-2">فريق التسويق</td>
                                <td class="p-2">12</td>
                                <td class="p-2">1</td>
                                <td class="p-2">92%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- إدارة المشاريع -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">إدارة المشاريع</h2>
                <div class="mb-4">
                    <button class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">إنشاء مشروع جديد</button>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-right">
                        <thead>
                            <tr class="bg-indigo-200">
                                <th class="p-2">اسم المشروع</th>
                                <th class="p-2">الفريق المسؤول</th>
                                <th class="p-2">تاريخ البدء</th>
                                <th class="p-2">تاريخ الانتهاء</th>
                                <th class="p-2">الحالة</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="p-2">تطوير الموقع الإلكتروني</td>
                                <td class="p-2">فريق التطوير</td>
                                <td class="p-2">2023-09-01</td>
                                <td class="p-2">2023-12-31</td>
                                <td class="p-2"><span class="bg-yellow-200 text-yellow-800 px-2 py-1 rounded">قيد التنفيذ</span></td>
                            </tr>
                            <tr class="bg-indigo-100">
                                <td class="p-2">حملة تسويقية جديدة</td>
                                <td class="p-2">فريق التسويق</td>
                                <td class="p-2">2023-10-15</td>
                                <td class="p-2">2024-01-15</td>
                                <td class="p-2"><span class="bg-green-200 text-green-800 px-2 py-1 rounded">مكتمل</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

@endsection
