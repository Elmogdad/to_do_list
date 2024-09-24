@extends('admin.partials.master')

@section('content')

   <!-- Main Content -->
   <div class="flex-1 p-6">
            <h1 class="text-3xl font-bold text-indigo-800 mb-6">إدارة المستخدمين</h1>


        <div class="overflow-x-auto bg-white p-6 rounded-lg shadow mb-6">
            <table class="min-w-full bg-white border border-indigo-700">
                <thead>
                    <tr class="bg-indigo-700 text-white">
                        <th class="py-3 px-4 text-right border-b">#</th>
                        <th class="py-3 px-4 text-right border-b">اسم المستخدم</th>
                        <th class="py-3 px-4 text-right border-b">البريد الإلكتروني</th>
                        <th class="py-3 px-4 text-right border-b">الدور</th>
                        <th class="py-3 px-4 text-right border-b">الإجراءات</th>
                    </tr>
                </thead>
                <tbody>


                        @if(count($users) > 0)
                        @foreach ($users as $key => $user )
                        <tr class="border-b">
                        <td class="py-3 px-4 text-right">{{$loop->iteration}}</td>
                        <td class="py-3 px-4 text-right">{{$user->name}}</td>
                        <td class="py-3 px-4 text-right">{{$user->email}}</td>
                        <td class="py-3 px-4 text-right">{{$user->role}}</td>
                        <td class="py-3 px-4 text-right">
                            <button class="bg-indigo-500 text-white py-1 px-3 rounded">تعديل</button>
                            <button class="bg-red-500 text-white py-1 px-3 rounded">حذف</button>

                        @endforeach
                        </td>
                        @else

                        @endif

                    </tr>

                </tbody>
            </table>
        </div>
            <!-- إضافة/إزالة المستخدمين -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">إضافة مستخدم جديد</h2>
                <form class="space-y-4">
                    <div>
                        <label for="username" class="block text-indigo-600">اسم المستخدم</label>
                        <input type="text" id="username" name="username" class="w-full p-2 border border-indigo-300 rounded">
                    </div>
                    <div>
                        <label for="email" class="block text-indigo-600">البريد الإلكتروني</label>
                        <input type="email" id="email" name="email" class="w-full p-2 border border-indigo-300 rounded">
                    </div>
                    <div>
                        <label for="role" class="block text-indigo-600">الدور</label>
                        <select id="role" name="role" class="w-full p-2 border border-indigo-300 rounded">
                            <option value="manager">مدير</option>
                            <option value="employee">موظف</option>
                            <option value="observer">مراقب</option>
                        </select>
                    </div>
                    <button type="submit" class="bg-indigo-600 text-white px-4 py-2 rounded hover:bg-indigo-700">إضافة مستخدم</button>
                </form>
            </div>

            <!-- إدارة الأدوار والصلاحيات -->
            <div class="bg-white p-6 rounded-lg shadow mb-6">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">إدارة الأدوار والصلاحيات</h2>
                <table class="w-full">
                    <thead>
                        <tr>
                            <th class="text-right text-indigo-600">المستخدم</th>
                            <th class="text-right text-indigo-600">الدور</th>
                            <th class="text-right text-indigo-600">الصلاحيات</th>
                            <th class="text-right text-indigo-600">الإجراءات</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>أحمد محمد</td>
                            <td>مدير</td>
                            <td>جميع الصلاحيات</td>
                            <td>
                                <button class="text-blue-600 hover:text-blue-800">تعديل</button>
                                <button class="text-red-600 hover:text-red-800 mr-2">حذف</button>
                            </td>
                        </tr>
                        <tr>
                            <td>سارة أحمد</td>
                            <td>موظف</td>
                            <td>إضافة وتعديل المهام</td>
                            <td>
                                <button class="text-blue-600 hover:text-blue-800">تعديل</button>
                                <button class="text-red-600 hover:text-red-800 mr-2">حذف</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- عرض النشاط -->
            <div class="bg-white p-6 rounded-lg shadow">
                <h2 class="text-2xl font-bold text-indigo-800 mb-4">سجل النشاطات</h2>
                <ul class="space-y-2">
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">أحمد محمد</span>
                        <span>أضاف مهمة جديدة: مراجعة التقرير الشهري</span>
                        <span class="text-gray-500">منذ ساعتين</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">سارة أحمد</span>
                        <span>أكملت مهمة: تحديث قاعدة البيانات</span>
                        <span class="text-gray-500">منذ 3 ساعات</span>
                    </li>
                    <li class="flex items-center justify-between">
                        <span class="text-indigo-600">محمد علي</span>
                        <span>أضاف تعليقًا على مهمة: تطوير واجهة المستخدم</span>
                        <span class="text-gray-500">منذ 5 ساعات</span>
                    </li>
                </ul>
            </div>
        </div>

@endsection
