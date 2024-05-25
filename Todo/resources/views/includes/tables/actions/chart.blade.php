<script type="text/javascript">
    $(document).ready(function() {
        
        var chart;
        chart = renderChart(makeSeries({!! $chart_corporation_JSC_json!!}));       
        Livewire.on('refreshChart', function () {
            jQuery(document).ready(function () {        
            var chart;
            chart = renderChart(makeSeries({!! $chart_corporation_JSC_json!!}));
            });           
        });
        function renderChart(series) {
        return JSC.chart('charJSCGroup', {
            type: 'organizational down',
            defaultTooltip: {
            asHTML: true,
            outline: 'none',
            zIndex: 10
            },
            chartArea:{
            @if(Cookie::get('darkMode') == "OFF")
            fill: "#141c26",
            @endif
            
            },
            exportOptions:{
            author : "Phạm Tuấn Anh",
            },
            defaultPoint: {
            focusGlow: false,
            connectorLine: { width: 1, color: '#e0e0e0' },
            tooltip:
                '<div class="tooltipBox">Phone: <b>%phone</b><br>Email: <b>%email</b><br>Address: <b>%address</b></div>',
            annotation: {
                padding: 3,
                asHTML: true,
                margin: [12, 2],
                label: {
                text:
                    '<img width=64 height=64 margin_bottom=4 class ="rounded-circle img-avatar" src=%photo><br/><div class="personDescription"><b>%name</b><br/>%code<br/></div>',
                autoWrap: false
                }
            },
            outline_width: 0,
            color: '#141c26'
            },
            series: series
        });
        }

        function makeSeries(data) {
        return [
            {
            points: data.map(function(item) {
                return {
                name: item.name,
                id: item.id,
                parent: item.parent,
                attributes: {
                    name: '<span style="font-size:13px;">' + item.name + '</span>',
                    code: '<span style="font-size:13px;">' + item.code + '</span>',
                    position: '<span style="font-size:13px;">' + item.position + '</span>',
                    phone: item.phone,
                    address: item.address,
                    email: item.email,
                    photo: item.photo,
                }
                };
            })
            }
        ];
        }
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        function OrgChartCall() {
                OrgChart.templates.myTemplate = Object.assign({}, OrgChart.templates.polina);
                OrgChart.templates.myTemplate.size = [300, 90];
                OrgChart.templates.myTemplate.field_0 = '<text data-width="140" data-text-overflow="ellipsis" style="font-size: 15px;font-weight: bold;text-transform:capitalize;" fill="#6e6d6d" x="85" y="25" text-anchor="start">{{ __('Name') }} : {val}</text>';                          
                OrgChart.templates.myTemplate.field_1 = '<text data-width="140" data-text-overflow="ellipsis" style="font-size: 13px;" fill="#6e6d6d" x="85" y="50" text-anchor="start">{{ __('Code') }} : {val}</text>';
                OrgChart.templates.myTemplate.field_2 = '<text data-width="140" data-text-overflow="ellipsis" style="font-size: 13px;" fill="#6e6d6d" x="85" y="70" text-anchor="start">{{ __('Address') }} : {val}</text>';
                OrgChart.templates.myTemplate.img_0 = '<clipPath id="{randId}"><circle cx="40" cy="40" r="35"></circle></clipPath><image preserveAspectRatio="xMidYMid slice" clip-path="url(#{randId})" xlink:href="{val}" x="0" y="0" width="80" height="80"></image>';
                var chart = new OrgChart(document.getElementById("chartOrgGroup"), {
                mouseScrool: OrgChart.action.scroll,
                showYScroll: OrgChart.scroll.visible,
                showXScroll: OrgChart.scroll.visible,
                template: 'myTemplate',
                searchDisplayField: ["name", "code", "address"],
                @if (Illuminate\Support\Facades\Cookie::get('darkMode') !=null)
                    @if(Cookie::get('darkMode') == "OFF")
                            mode: "dark",
                            @else
                            mode: "light",
                            @endif  
                @endif            
                searchFieldsWeight: {
                    "name": 100, //percent
                    "code": 20, //percent
                    "address": 20 //percent
                },
                nodeBinding: {
                    field_0:    "name",
                    field_1:    "code",
                    field_2:    "address",
                    img_0:      "photo"
                },
                // linkBinding: {
                //     link_field_0: "name"
                // },
                editForm:{
                    photoBinding: 'photo'
                },
                menu: {
                    pdf:  { text: "Export PDF", onClick: pdf },
                    png:  { text: "Export PNG", onClick: png },
                    svg:  { text: "Export SVG", onClick: svg },
                    csv:  { text: "Export CSV", onClick: csv },
                    json: { text: "Export JSON", onClick: json }
                },
                nodeMenu: {
                    pdf: { text: "Export PDF", onClick: pdf },
                    png: { text: "Export PNG", onClick: png },
                    svg: { text: "Export SVG", onClick: svg }
                },            
                nodes: {!! $chart_corporation_json!!}
            });
            chart.onInit(() => {
                chart.searchUI.find("Tuấn Anh");
            })
            chart.on('exportstart', function(sender, args){
                args.styles += document.getElementById('myStyles').outerHTML;
            });    
            
            function pdf(nodeId) {
                chart.exportPDF({filename: "corporation_org.pdf", format: "A4",expandChildren: true, nodeId: nodeId});
            }
            function png(nodeId) {
                chart.exportPNG({filename: "corporation_org.png", expandChildren: true, nodeId: nodeId});
            }
            function svg(nodeId) {
                chart.exportSVG({filename: "corporation_org.svg", expandChildren: true, nodeId: nodeId});
            }   
            function csv(nodeId) {
                chart.exportCSV({filename: "corporation_org.csv", expandChildren: true, nodeId: nodeId});
            }    
            function json(nodeId) {
                chart.exportJSON({filename: "corporation_org.json", expandChildren: true, nodeId: nodeId});
            }
        }
        OrgChartCall();
        Livewire.on('refreshChart', function () {
            jQuery(document).ready(function () {        
                OrgChartCall();
            });           
        });         
    });                                                                                
</script>
<style id="myStyles">
    .boc-dark {
        background-color: #101924!important;
    }

    .boc-light {
        background-color: #fbfbfc!important;
    }

    .node.red rect {
        fill: #750000!important;
    }

    [data-n-id] rect:hover {
        filter: drop-shadow( 4px 5px 5px #aeaeae);
    }

    [data-n-id] rect {
        fill: #FAF9F6;
    }

    [data-l-id] path {
        stroke: #8c8c8c;
    }

    .field_0 {
        font-family: Impact;
        text-transform: uppercase;
        fill: #cfcfcf;
    }

    div.boc-light .boc-input>input {
        border-color: #364a63;
    }


    /* input field on focus */

    div.boc-light .boc-input>input:focus {
        border-color: #364a63;
    }


    /* the search label on focus */

    .boc-light .boc-input>label.focused,
    .boc-dark .boc-input>label.focused {
        color: #364a63 !important;
    }


    /* the hovered search resutt */

    .boc-light .boc-search [data-search-item-id]:hover,
    .boc-light .boc-search [data-selected=yes] {
        background-color: #364a63 !important;
    }

</style>    