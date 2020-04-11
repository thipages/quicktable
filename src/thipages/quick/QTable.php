<?php
namespace thipages\quick;
class QTable {
    private $html;
    public function __construct($headers, $cells, $tableAttributes=[]) {
        $html_header=[];
        $html_rows=[];
        foreach ($cells as $cell) {
            $c=[];
            if (!is_array($cell)) $cell=[$cell];
            $colNum=0;
            foreach ($cell as $col) {
                $c[]=QTag::tag('td',$col);
                $colNum++;
            }
            $html_rows[]=QTag::tag('tr',join('',$c));
        }
        if ($headers) foreach ($headers as $header) $html_header[]=QTag::tag('th',$header);
        $this->html= QTag::tag(
            'table',
            join('',$html_header)
            .join('',$html_rows),
            $tableAttributes
        );
    }
    public function getHTML() {
        return $this->html;
    }
    public static function create($headers, $cells, $tableAttributes=[]) {
        return (new self($headers,$cells, $tableAttributes))->getHtml();
    }
}