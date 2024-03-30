import { createRouter, createWebHashHistory } from 'vue-router'
import Student from '@/components/Student.vue'
import Course from '@/components/Course.vue'
import StudentEdit from '@/components/StudentEdit.vue'
import StudentAdd from '@/components/StudentAdd.vue'

export default createRouter({
    history: createWebHashHistory(),
    routes: [
        { path: '/Student', component: Student, alias: '/' },
        { path: '/Course', component: Course },
        { path: '/StudentEdit/:id', component: StudentEdit, name: 'StudentEdit' },
        { path: '/StudentAdd', component: StudentAdd },
    ]
})