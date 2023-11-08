<?php

namespace Kst\Models;

class Page
{
    private $id;
    private $type;
    private $template;

    private $slug;
    private $title;
    private $keywords;
    private $description;
    private $author;
    private $image;

    private $category;
    private $tags;

    private $status;

    private $parent;
    private $order;

    private $password;

    private $content;

    private $created_at;
    private $updated_at;

    private $social_image;
    private $social_title;
    private $social_description;


    public function __construct($id, $type, $template, $slug, $title, $keywords, $description, $author, $image, $category, $tags, $status, $parent, $order, $password, $content, $created_at, $updated_at, $social_image, $social_title, $social_description)
    {
        $this->id = $id;
        $this->type = $type;
        $this->template = $template;
        $this->slug = $slug;
        $this->title = $title;
        $this->keywords = $keywords;
        $this->description = $description;
        $this->author = $author;
        $this->image = $image;
        $this->category = $category;
        $this->tags = $tags;
        $this->status = $status;
        $this->parent = $parent;
        $this->order = $order;
        $this->password = $password;
        $this->content = $content;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
        $this->social_image = $social_image;
        $this->social_title = $social_title;
        $this->social_description = $social_description;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setType($type) {
        $this->type = $type;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setTemplate($template) {
        $this->template = $template;
    }

    public function getTemplate()
    {
        return $this->template;
    }

    public function setSlug($slug) {
        $this->slug = $slug;
    }

    public function getSlug()
    {
        return $this->slug;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    public function getKeywords()
    {
        return $this->keywords;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setAuthor($author) {
        $this->author = $author;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setImage($image) {
        $this->image = $image;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setCategory($category) {
        $this->category = $category;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setTags($tags) {
        $this->tags = $tags;
    }

    public function getTags()
    {
        return $this->tags;
    }

    public function setStatus($status) {
        $this->status = $status;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setParent($parent) {
        $this->parent = $parent;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function setOrder($order) {
        $this->order = $order;
    }

    public function getOrder()
    {
        return $this->order;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setCreatedAt($created_at) {
        $this->created_at = $created_at;
    }

    public function getCreatedAt()
    {
        return $this->created_at;
    }

    public function setUpdatedAt($updated_at) {
        $this->updated_at = $updated_at;
    }

    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    public function setSocialImage($socialImage) {
        $this->social_image = $socialImage;
    }

    public function getSocialImage()
    {
        return $this->social_image;
    }

    public function setSocialTitle($socialTitle) {
        $this->social_title = $socialTitle;
    }

    public function getSocialTitle()
    {
        return $this->social_title;
    }

    public function setSocialDescription($socialDescription) {
        $this->social_description = $socialDescription;
    }

    public function getSocialDescription()
    {
        return $this->social_description;
    }
}