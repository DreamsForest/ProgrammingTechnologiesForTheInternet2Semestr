import { createRouter, createWebHashHistory } from 'vue-router'
import Student from '@/components/Student.vue'
import Course from '@/components/Course.vue'

export default createRouter({
    history: createWebHashHistory(),
    routes: [
        { path: '/Student', component: Student, alias: '/' },
        { path: '/Course', component: Course },
    ]
})