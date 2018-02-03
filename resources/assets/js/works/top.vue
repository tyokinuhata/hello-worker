<template>
    <div class="jumbotron text-center mt-100">
        <h2>{{ nowYear }}年{{ nowMonth }}月
            {{ zeroPadding(nowDate) }}日
            ({{ nowDay }})
            {{ zeroPadding(nowHour) }}時
            {{ zeroPadding(nowMin) }}分
            {{ zeroPadding(nowSec) }}秒</h2>
        <h2 class="mt-10">出勤時間: 00時間00分00秒</h2>
        <div class="mt-30">
            <button class="btn btn-success mr-10">在宅</button>
            <button class="btn btn-primary mr-10" :disabled="start" @click="changeStart()">出勤</button>
            <button class="btn btn-default mr-10" :disabled="!start" @click="changeStart()">退勤</button>
            <button class="btn btn-warning mr-10" :disabled="" @click="">停止</button>
            <button class="btn btn-info mr-10">再開</button>
            <button class="btn btn-danger">取消</button>
        </div>
    </div>
</template>

<script>
export default {
    data() {
        return {
            nowYear: 0,
            nowMonth: 0,
            nowDate: 0,
            nowDay: 0,
            nowHour: 0,
            nowMin: 0,
            nowSec: 0,
            start: false
        }
    },
    methods: {
        zeroPadding(num) {
            if (num < 10) {
                return '0' + num
            } else {
                return num
            }
        },
        changeState() {
            this.start = !this.start
        }
    },
    created() {
        setInterval(() => {
            const nowTime = new Date()
            this.nowYear = nowTime.getFullYear()
            this.nowMonth = nowTime.getMonth() + 1
            this.nowDate = nowTime.getDate()
            this.nowHour = nowTime.getHours()
            this.nowMin = nowTime.getMinutes()
            this.nowSec = nowTime.getSeconds()
            switch(nowTime.getDay()) {
                case 0:
                    this.nowDay = '日'
                    break
                case 1:
                    this.nowDay = '月'
                    break
                case 2:
                    this.nowDay = '火'
                    break
                case 3:
                    this.nowDay = '水'
                    break
                case 4:
                    this.nowDay = '木'
                    break
                case 5:
                    this.nowDay = '金'
                    break
                case 6:
                    this.nowDay = '土'
                    break
            }
        }, 1000)
    },
}
</script>

<style></style>