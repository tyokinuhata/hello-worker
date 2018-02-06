<template>
    <div class="jumbotron text-center mt-100">
        <h2>
            <span>{{ nowYear }}年</span>
            <span>{{ nowMonth }}月</span>
            <span>{{ zeroPadding(nowDate) }}日</span>
            <span>({{ nowDay }})</span>
            <span>{{ zeroPadding(nowHour) }}時</span>
            <span>{{ zeroPadding(nowMin) }}分</span>
            <span>{{ zeroPadding(nowSec) }}秒</span>
        </h2>
        <h2 class="mt-10">
            <span>出勤時間:</span>
            <span>{{ workHour }}時間</span>
            <span>{{ workMin }}分</span>
        </h2>
        <div class="mt-30">
            <button class="btn btn-success mr-10" :class="remote" @click="isRemote()">在宅</button>
            <button class="btn btn-primary mr-10" :disabled="start" @click="isStart()">出勤</button>
            <button class="btn btn-default mr-10" :disabled="stop" @click="isStop() + sendData()">退勤</button>
            <button class="btn btn-warning mr-10" :disabled="pause" @click="isPause()">停止</button>
            <button class="btn btn-info mr-10" :disabled="restart" @click="isRestart()">再開</button>
            <button class="btn btn-danger" :disabled="cancel" @click="isCancel()">取消</button>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

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
                remote: '',
                start: false,
                stop: true,
                pause: true,
                restart: true,
                cancel:true,
                workHour: 0,
                workMin: 0,
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
            isRemote() {
                if (this.remote === 'active') {
                    this.remote = ''
                } else {
                    this.remote = 'active'
                }
            },
            isStart() {
                this.start = true
                this.stop = false
                this.pause = false
                this.cancel = false
            },
            isStop() {
                this.start = false
                this.stop = true
                this.pause = true
                this.cancel = true
            },
            isPause() {
                this.stop = true
                this.pause = true
                this.restart = false
                this.cancel = true
            },
            isRestart() {
                this.stop = false
                this.pause = false
                this.restart = true
                this.cancel = false
            },
            isCancel() {
                this.start = false
                this.stop = true
                this.pause = true
                this.cancel = true
            },
            sendData() {
                axios.post('/api/time/store', {
                    date: '1/1',
                    hour: 3,
                    minute: 3,
                    fee: 580,
                    form: 'office'
                })
                    .then(response => {
                        console.log(response.data)
                    })
                    .catch(error => {
                        console.log(error.response)
                    })
            },
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

<style lang="scss" scoped>
    .active {
        opacity: 0.65;
        box-shadow: none;
        border-color: #259d6d !important;
        background: #2ab27b !important;
    }
</style>