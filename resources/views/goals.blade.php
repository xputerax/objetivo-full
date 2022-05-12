@extends('layouts.app')

@section('title', 'Goals')

@php
    $highlighted_page = 'goals';
@endphp

@section('content')
<main id="main" class="main">
    @include('goals._page-title')

    <section class="section dashboard">
        @include('goals._add-goal')

        <div class="row">
            @include('goals._goal-card-1')
            @include('goals._goal-card-2')
            @include('goals._goal-card-3')
            @include('goals._goal-card-4')
        </div> <!-- / .row -->
    </section>
</main>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        echarts.init(document.querySelector("#pieChart1")).setOption({
            tooltip: {
                trigger: 'item'
            },

            series: [{
                name: '',
                type: 'pie',
                radius: '70%',

                data: [{
                    value: 10,
                    name: 'Not started'

                },
                {
                    value: 50,
                    name: 'Completed'

                },
                {
                    value: 40,
                    name: 'In Progress'
                }
                ],
                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
        echarts.init(document.querySelector("#pieChart2")).setOption({
            tooltip: {
                trigger: 'item'
            },

            series: [{
                name: '',
                type: 'pie',
                radius: '70%',

                data: [{
                    value: 20,
                    name: 'Not started'

                },
                {
                    value: 70,
                    name: 'Completed'

                },
                {
                    value: 10,
                    name: 'In Progress'
                }
                ],

                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
        echarts.init(document.querySelector("#pieChart3")).setOption({
            tooltip: {
                trigger: 'item'
            },

            series: [{
                name: '',
                type: 'pie',
                radius: '70%',

                data: [{
                    value: 20,
                    name: 'Not started'

                },
                {
                    value: 40,
                    name: 'Completed'

                },
                {
                    value: 40,
                    name: 'In Progress'
                }
                ],

                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
        echarts.init(document.querySelector("#pieChart4")).setOption({
            tooltip: {
                trigger: 'item'
            },

            series: [{
                name: '',
                type: 'pie',
                radius: '70%',

                data: [{
                    value: 20,
                    name: 'Not started'

                },
                {
                    value: 30,
                    name: 'Completed'

                },
                {
                    value: 50,
                    name: 'In Progress'
                }
                ],

                emphasis: {
                    itemStyle: {
                        shadowBlur: 10,
                        shadowOffsetX: 0,
                        shadowColor: 'rgba(0, 0, 0, 0.5)'
                    }
                }
            }]
        });
    });
</script>

<script src="{{ asset('/js/add_actions.js') }}"></script>
@endsection
