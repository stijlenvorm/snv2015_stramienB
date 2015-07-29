<?php
namespace snv\Theme;

class ContentHeader
{

    public function __construct()
    {
        $this->contentHeaderCustomField('page');
        $this->contentHeaderCustomField('post');

        add_action('contentheader', array($this, 'setHeader'));
    }

    /* returns the header by echoing */
    public function setHeader()
    {
        global $post;
        $id = $post->ID;

        // get the meta data
        $meta = get_post_meta($id);
        if (!isset($meta['_header_type'])) {
            return false;
        }

        $header = $meta['_header_type'][0];
        
        $returnString = '<div class="paginaHeader">';
        if ($header === 'image') {
            $image = $meta['_header_image'][0];
            if (!empty($image)) {
                    $image_url_large  = wp_get_attachment_image_src($image, 'header-image-large');
                    $image_url_medium = wp_get_attachment_image_src($image, 'header-image-medium');
                    $image_url_small  = wp_get_attachment_image_src($image, 'header-image-small');
                
                

                $returnString .= '<div class="paginaImg" style="background:url('. $image_url_large[0] .')"  ></div>';
            }

         // $returnString .= '<img src="'. $image_url[0] .'" alt=" ">';
        } else if ($header === 'shortcode') {
            $shortcode = $meta['_header_shortcode'][0];
            $returnString .= do_shortcode($shortcode);
        }

        $returnString .= '</div>';

        echo  $returnString;
    }

    /* creates the extra custom fields */
    public function contentHeaderCustomField($post_type)
    {

        // create metaBox with select option
                $page = register_cuztom_post_type($post_type);
                $page->add_meta_box(
                    'header',
                    'Page Header Options',
                    array(
                        array(
                            'name'          => 'type',
                            'label'         => 'type header',
                            'description'   => 'selecteer het type header',
                            'type'          => 'select',
                            'options'       => array(
                                'noHeader'    => 'Geen header',
                                'image'       => 'Afbeelding',
                                'shortcode'   => 'Shortcode',
                                ),
                            ),
                        array(
                            'name'          => 'shortcode',
                            'label'         => 'shortcode',
                            'description'   => 'geef de shortcode in ',
                            'type'          => 'text',
                            ),
                        array(
                            'name'          => 'image',
                            'label'         => 'image',
                            'description'   => 'Selecteer afbeelding',
                            'type'          => 'image',
                            ),
                        )
                );
    }
}
