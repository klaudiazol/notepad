<?php
// struktura drzewa - jeden element w notatce (jeden rekord z tabeli)
class TreeElement
{
    public $m_id;
    public $m_id_parent;
    public $m_content;
    public $m_id_notes;

    // konstruktor kopiujący
    // function __construct(){
    // }

    // konstruktor jednego elementu
    function __construct($id, $id_parent, $content, $id_notes)
    {
        $m_id = $id;
        $m_id_parent = $id_parent;
        $m_content = $content;
        $m_id_notes = $id_notes;
    }
}

// przechowywanie elementów jednego drzewa (jedna notatka)
class Tree
{

    // wektor - ładujemy elementy do niego
    public $vector = new \Ds\Vector();

    function addTreeElement($TreeElement)
    {
        $el = new TreeElement($TreeElement->$m_id, $TreeElement->$m_id_parent, $TreeElement->$m_content, $TreeElement->$id_notes);
        $vector->push($el);
    }
}
