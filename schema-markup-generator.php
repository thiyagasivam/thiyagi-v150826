<?php include 'header.php';?>

<?php
/**
 * Advanced Schema Markup Generator
 * Professional schema.org structured data generator with validation and optimization
 */

class AdvancedSchemaGenerator {
    private $supportedTypes = [
        'Article' => [
            'name' => 'Article',
            'description' => 'General article content',
            'fields' => ['title', 'description', 'url', 'author', 'datePublished', 'image', 'publisher']
        ],
        'BlogPosting' => [
            'name' => 'Blog Post', 
            'description' => 'Blog article with author and publishing details',
            'fields' => ['title', 'description', 'url', 'author', 'datePublished', 'image', 'publisher', 'wordCount']
        ],
        'NewsArticle' => [
            'name' => 'News Article',
            'description' => 'News content with headline and dateline', 
            'fields' => ['headline', 'description', 'url', 'author', 'datePublished', 'image', 'publisher', 'dateline']
        ],
        'Product' => [
            'name' => 'Product',
            'description' => 'E-commerce product with pricing and reviews',
            'fields' => ['name', 'description', 'image', 'brand', 'price', 'currency', 'availability', 'rating', 'reviewCount']
        ],
        'Book' => [
            'name' => 'Book',
            'description' => 'Published book with author and ISBN',
            'fields' => ['name', 'description', 'author', 'isbn', 'publisher', 'datePublished', 'image', 'genre']
        ],
        'Course' => [
            'name' => 'Course',
            'description' => 'Educational course or training program',
            'fields' => ['name', 'description', 'provider', 'instructor', 'duration', 'price', 'currency', 'startDate']
        ],
        'Event' => [
            'name' => 'Event',
            'description' => 'Scheduled event with location and timing',
            'fields' => ['name', 'description', 'startDate', 'endDate', 'location', 'organizer', 'price', 'currency']
        ],
        'JobPosting' => [
            'name' => 'Job Posting',
            'description' => 'Employment opportunity with requirements',
            'fields' => ['title', 'description', 'company', 'location', 'salary', 'currency', 'employmentType', 'datePosted']
        ],
        'LocalBusiness' => [
            'name' => 'Local Business',
            'description' => 'Local business with contact information',
            'fields' => ['name', 'description', 'address', 'phone', 'email', 'website', 'openingHours', 'priceRange']
        ],
        'Organization' => [
            'name' => 'Organization',
            'description' => 'Company or organization profile',
            'fields' => ['name', 'description', 'url', 'logo', 'email', 'phone', 'address', 'foundingDate']
        ],
        'Person' => [
            'name' => 'Person',
            'description' => 'Individual person profile',
            'fields' => ['name', 'description', 'image', 'jobTitle', 'worksFor', 'email', 'telephone', 'address']
        ],
        'Recipe' => [
            'name' => 'Recipe',
            'description' => 'Cooking recipe with ingredients and instructions',
            'fields' => ['name', 'description', 'image', 'author', 'prepTime', 'cookTime', 'servings', 'ingredients', 'instructions']
        ],
        'Review' => [
            'name' => 'Review',
            'description' => 'Product or service review with rating',
            'fields' => ['reviewBody', 'rating', 'author', 'datePublished', 'itemReviewed', 'publisher']
        ],
        'VideoObject' => [
            'name' => 'Video',
            'description' => 'Video content with metadata',
            'fields' => ['name', 'description', 'url', 'thumbnailUrl', 'uploadDate', 'duration', 'author', 'publisher']
        ],
        'WebPage' => [
            'name' => 'Web Page',
            'description' => 'Individual web page with metadata',
            'fields' => ['name', 'description', 'url', 'author', 'datePublished', 'lastReviewed', 'publisher']
        ],
        'WebSite' => [
            'name' => 'Website',
            'description' => 'Entire website with search functionality',
            'fields' => ['name', 'description', 'url', 'author', 'publisher', 'searchAction', 'potentialAction']
        ]
    ];
    
    private $validationErrors = [];
    
    public function getSupportedTypes() {
        return $this->supportedTypes;
    }
    
    public function generateSchema($type, $data) {
        $this->validationErrors = [];
        
        if (!isset($this->supportedTypes[$type])) {
            throw new Exception("Unsupported schema type: " . $type);
        }
        
        $method = 'generate' . $type . 'Schema';
        if (!method_exists($this, $method)) {
            throw new Exception("Schema generator not implemented for: " . $type);
        }
        
        return $this->$method($data);
    }
    
    public function validateSchema($schema) {
        // Basic JSON validation
        $decoded = json_decode($schema, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            return ['valid' => false, 'errors' => ['Invalid JSON format']];
        }
        
        // Check required fields
        $errors = [];
        if (empty($decoded['@context'])) {
            $errors[] = 'Missing @context';
        }
        if (empty($decoded['@type'])) {
            $errors[] = 'Missing @type';
        }
        
        return ['valid' => empty($errors), 'errors' => $errors];
    }
    
    private function generateArticleSchema($data) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Article",
            "headline" => $data['title'] ?? '',
            "description" => $data['description'] ?? '',
            "url" => $data['url'] ?? '',
            "datePublished" => $this->formatDate($data['datePublished'] ?? ''),
            "dateModified" => $this->formatDate($data['dateModified'] ?? $data['datePublished'] ?? ''),
            "author" => [
                "@type" => "Person",
                "name" => $data['author'] ?? ''
            ],
            "publisher" => [
                "@type" => "Organization", 
                "name" => $data['publisher'] ?? '',
                "logo" => [
                    "@type" => "ImageObject",
                    "url" => $data['publisherLogo'] ?? ''
                ]
            ]
        ];
        
        if (!empty($data['image'])) {
            $schema["image"] = [
                "@type" => "ImageObject",
                "url" => $data['image']
            ];
        }
        
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function generateProductSchema($data) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Product",
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "brand" => [
                "@type" => "Brand",
                "name" => $data['brand'] ?? ''
            ],
            "offers" => [
                "@type" => "Offer",
                "price" => $data['price'] ?? '',
                "priceCurrency" => $data['currency'] ?? 'USD',
                "availability" => "https://schema.org/" . ($data['availability'] ?? 'InStock'),
                "url" => $data['url'] ?? ''
            ]
        ];
        
        if (!empty($data['image'])) {
            $schema["image"] = $data['image'];
        }
        
        if (!empty($data['rating']) && !empty($data['reviewCount'])) {
            $schema["aggregateRating"] = [
                "@type" => "AggregateRating",
                "ratingValue" => $data['rating'],
                "reviewCount" => $data['reviewCount']
            ];
        }
        
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function generateEventSchema($data) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Event",
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "startDate" => $this->formatDate($data['startDate'] ?? ''),
            "endDate" => $this->formatDate($data['endDate'] ?? ''),
            "location" => [
                "@type" => "Place",
                "name" => $data['location'] ?? '',
                "address" => $data['address'] ?? ''
            ],
            "organizer" => [
                "@type" => "Organization",
                "name" => $data['organizer'] ?? ''
            ]
        ];
        
        if (!empty($data['price'])) {
            $schema["offers"] = [
                "@type" => "Offer",
                "price" => $data['price'],
                "priceCurrency" => $data['currency'] ?? 'USD'
            ];
        }
        
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function generateLocalBusinessSchema($data) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "LocalBusiness",
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "address" => [
                "@type" => "PostalAddress",
                "streetAddress" => $data['streetAddress'] ?? '',
                "addressLocality" => $data['city'] ?? '',
                "addressRegion" => $data['state'] ?? '',
                "postalCode" => $data['postalCode'] ?? '',
                "addressCountry" => $data['country'] ?? ''
            ],
            "telephone" => $data['phone'] ?? '',
            "email" => $data['email'] ?? '',
            "url" => $data['website'] ?? '',
            "priceRange" => $data['priceRange'] ?? ''
        ];
        
        if (!empty($data['openingHours'])) {
            $schema["openingHoursSpecification"] = [
                "@type" => "OpeningHoursSpecification",
                "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
                "opens" => "09:00",
                "closes" => "17:00"
            ];
        }
        
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function generateRecipeSchema($data) {
        $schema = [
            "@context" => "https://schema.org",
            "@type" => "Recipe", 
            "name" => $data['name'] ?? '',
            "description" => $data['description'] ?? '',
            "author" => [
                "@type" => "Person",
                "name" => $data['author'] ?? ''
            ],
            "prepTime" => "PT" . ($data['prepTime'] ?? '0') . "M",
            "cookTime" => "PT" . ($data['cookTime'] ?? '0') . "M",
            "recipeYield" => $data['servings'] ?? ''
        ];
        
        if (!empty($data['image'])) {
            $schema["image"] = $data['image'];
        }
        
        if (!empty($data['ingredients'])) {
            $schema["recipeIngredient"] = explode("\n", $data['ingredients']);
        }
        
        if (!empty($data['instructions'])) {
            $instructions = explode("\n", $data['instructions']);
            $schema["recipeInstruction"] = array_map(function($instruction, $index) {
                return [
                    "@type" => "HowToStep",
                    "name" => "Step " . ($index + 1),
                    "text" => trim($instruction)
                ];
            }, $instructions, array_keys($instructions));
        }
        
        return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    }
    
    private function formatDate($date) {
        if (empty($date)) return '';
        try {
            return date('c', strtotime($date));
        } catch (Exception $e) {
            return $date;
        }
    }
}

// Initialize generator
$generator = new AdvancedSchemaGenerator();
$supportedTypes = $generator->getSupportedTypes();

// Handle form submission
$schemaMarkup = '';
$schemaType = 'Article';
$error = '';
$success = '';
$validationResult = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $schemaType = $_POST['schema_type'] ?? 'Article';
    
    try {
        $schemaMarkup = $generator->generateSchema($schemaType, $_POST);
        $validationResult = $generator->validateSchema($schemaMarkup);
        
        if ($validationResult['valid']) {
            $success = "Schema markup generated successfully! JSON-LD is valid and ready to use.";
        } else {
            $error = "Generated schema has validation issues: " . implode(', ', $validationResult['errors']);
        }
    } catch (Exception $e) {
        $error = "Error generating schema: " . $e->getMessage();
    }
}

// Helper function to format date for schema
function formatDateForSchema($date) {
    if (empty($date)) return '';
    return date('c', strtotime($date));
}

// Schema generation functions
function generateArticleSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Article",
        "headline" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['date_published'])) {
        $schema["datePublished"] = formatDateForSchema($data['date_published']);
    }
    
    if (!empty($data['date_modified'])) {
        $schema["dateModified"] = formatDateForSchema($data['date_modified']);
    }
    
    if (!empty($data['author_name'])) {
        $schema["author"] = [
            "@type" => "Person",
            "name" => $data['author_name']
        ];
    }
    
    if (!empty($data['publisher_name'])) {
        $schema["publisher"] = [
            "@type" => "Organization",
            "name" => $data['publisher_name']
        ];
        
        if (!empty($data['publisher_logo'])) {
            $schema["publisher"]["logo"] = [
                "@type" => "ImageObject",
                "url" => $data['publisher_logo']
            ];
        }
    }
    
    if (!empty($data['image_url'])) {
        $schema["image"] = $data['image_url'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateBlogPostingSchema($title, $description, $url, $data) {
    $schema = generateArticleSchema($title, $description, $url, $data);
    $schema = json_decode($schema, true);
    $schema["@type"] = "BlogPosting";
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateNewsArticleSchema($title, $description, $url, $data) {
    $schema = generateArticleSchema($title, $description, $url, $data);
    $schema = json_decode($schema, true);
    $schema["@type"] = "NewsArticle";
    
    if (!empty($data['dateline'])) {
        $schema["dateline"] = $data['dateline'];
    }
    
    if (!empty($data['print_column'])) {
        $schema["printColumn"] = $data['print_column'];
    }
    
    if (!empty($data['print_page'])) {
        $schema["printPage"] = $data['print_page'];
    }
    
    if (!empty($data['print_section'])) {
        $schema["printSection"] = $data['print_section'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateProductSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Product",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['image_url'])) {
        $schema["image"] = $data['image_url'];
    }
    
    if (!empty($data['brand'])) {
        $schema["brand"] = [
            "@type" => "Brand",
            "name" => $data['brand']
        ];
    }
    
    if (!empty($data['sku'])) {
        $schema["sku"] = $data['sku'];
    }
    
    if (!empty($data['gtin'])) {
        $schema["gtin"] = $data['gtin'];
    }
    
    if (!empty($data['price']) || !empty($data['price_currency'])) {
        $schema["offers"] = [
            "@type" => "Offer",
            "price" => $data['price'] ?? '',
            "priceCurrency" => $data['price_currency'] ?? 'USD'
        ];
        
        if (!empty($data['price_valid_until'])) {
            $schema["offers"]["priceValidUntil"] = formatDateForSchema($data['price_valid_until']);
        }
        
        if (!empty($data['availability'])) {
            $schema["offers"]["availability"] = $data['availability'];
        }
    }
    
    if (!empty($data['rating_value']) || !empty($data['review_count'])) {
        $schema["aggregateRating"] = [
            "@type" => "AggregateRating",
            "ratingValue" => $data['rating_value'] ?? '',
            "reviewCount" => $data['review_count'] ?? ''
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateBookSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Book",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['image_url'])) {
        $schema["image"] = $data['image_url'];
    }
    
    if (!empty($data['author_name'])) {
        $schema["author"] = [
            "@type" => "Person",
            "name" => $data['author_name']
        ];
    }
    
    if (!empty($data['isbn'])) {
        $schema["isbn"] = $data['isbn'];
    }
    
    if (!empty($data['publisher'])) {
        $schema["publisher"] = $data['publisher'];
    }
    
    if (!empty($data['date_published'])) {
        $schema["datePublished"] = formatDateForSchema($data['date_published']);
    }
    
    if (!empty($data['book_edition'])) {
        $schema["bookEdition"] = $data['book_edition'];
    }
    
    if (!empty($data['number_of_pages'])) {
        $schema["numberOfPages"] = $data['number_of_pages'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateCourseSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Course",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['course_code'])) {
        $schema["courseCode"] = $data['course_code'];
    }
    
    if (!empty($data['provider'])) {
        $schema["provider"] = [
            "@type" => "Organization",
            "name" => $data['provider']
        ];
    }
    
    if (!empty($data['course_prerequisites'])) {
        $schema["coursePrerequisites"] = $data['course_prerequisites'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateEventSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Event",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['start_date'])) {
        $schema["startDate"] = formatDateForSchema($data['start_date']);
    }
    
    if (!empty($data['end_date'])) {
        $schema["endDate"] = formatDateForSchema($data['end_date']);
    }
    
    if (!empty($data['location_name'])) {
        $schema["location"] = [
            "@type" => "Place",
            "name" => $data['location_name'],
            "address" => $data['location_address'] ?? ''
        ];
    }
    
    if (!empty($data['event_status'])) {
        $schema["eventStatus"] = $data['event_status'];
    }
    
    if (!empty($data['organizer'])) {
        $schema["organizer"] = [
            "@type" => "Organization",
            "name" => $data['organizer']
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateJobPostingSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "JobPosting",
        "title" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['hiring_organization'])) {
        $schema["hiringOrganization"] = [
            "@type" => "Organization",
            "name" => $data['hiring_organization']
        ];
    }
    
    if (!empty($data['job_location'])) {
        $schema["jobLocation"] = [
            "@type" => "Place",
            "address" => [
                "@type" => "PostalAddress",
                "addressLocality" => $data['job_location']
            ]
        ];
    }
    
    if (!empty($data['date_posted'])) {
        $schema["datePosted"] = formatDateForSchema($data['date_posted']);
    }
    
    if (!empty($data['valid_through'])) {
        $schema["validThrough"] = formatDateForSchema($data['valid_through']);
    }
    
    if (!empty($data['employment_type'])) {
        $schema["employmentType"] = $data['employment_type'];
    }
    
    if (!empty($data['base_salary'])) {
        $schema["baseSalary"] = [
            "@type" => "MonetaryAmount",
            "currency" => $data['salary_currency'] ?? 'USD',
            "value" => [
                "@type" => "QuantitativeValue",
                "value" => $data['base_salary'],
                "unitText" => $data['salary_unit'] ?? 'YEAR'
            ]
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateLocalBusinessSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "LocalBusiness",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['address'])) {
        $schema["address"] = [
            "@type" => "PostalAddress",
            "streetAddress" => $data['address']
        ];
    }
    
    if (!empty($data['phone'])) {
        $schema["telephone"] = $data['phone'];
    }
    
    if (!empty($data['opening_hours'])) {
        $schema["openingHoursSpecification"] = [
            "@type" => "OpeningHoursSpecification",
            "dayOfWeek" => ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
            "opens" => "09:00",
            "closes" => "17:00"
        ];
    }
    
    if (!empty($data['price_range'])) {
        $schema["priceRange"] = $data['price_range'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateOrganizationSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Organization",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['logo'])) {
        $schema["logo"] = $data['logo'];
    }
    
    if (!empty($data['same_as'])) {
        $sameAs = array_map('trim', explode(',', $data['same_as']));
        $schema["sameAs"] = $sameAs;
    }
    
    if (!empty($data['contact_point'])) {
        $schema["contactPoint"] = [
            "@type" => "ContactPoint",
            "telephone" => $data['contact_phone'] ?? '',
            "contactType" => $data['contact_type'] ?? 'customer service'
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generatePersonSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Person",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['image'])) {
        $schema["image"] = $data['image'];
    }
    
    if (!empty($data['job_title'])) {
        $schema["jobTitle"] = $data['job_title'];
    }
    
    if (!empty($data['same_as'])) {
        $sameAs = array_map('trim', explode(',', $data['same_as']));
        $schema["sameAs"] = $sameAs;
    }
    
    if (!empty($data['works_for'])) {
        $schema["worksFor"] = [
            "@type" => "Organization",
            "name" => $data['works_for']
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateRecipeSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Recipe",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['image'])) {
        $schema["image"] = $data['image'];
    }
    
    if (!empty($data['author'])) {
        $schema["author"] = [
            "@type" => "Person",
            "name" => $data['author']
        ];
    }
    
    if (!empty($data['prep_time'])) {
        $schema["prepTime"] = $data['prep_time'];
    }
    
    if (!empty($data['cook_time'])) {
        $schema["cookTime"] = $data['cook_time'];
    }
    
    if (!empty($data['total_time'])) {
        $schema["totalTime"] = $data['total_time'];
    }
    
    if (!empty($data['recipe_yield'])) {
        $schema["recipeYield"] = $data['recipe_yield'];
    }
    
    if (!empty($data['recipe_ingredients'])) {
        $ingredients = array_map('trim', explode("\n", $data['recipe_ingredients']));
        $schema["recipeIngredient"] = $ingredients;
    }
    
    if (!empty($data['recipe_instructions'])) {
        $instructions = array_map('trim', explode("\n", $data['recipe_instructions']));
        $schema["recipeInstructions"] = array_map(function($instruction) {
            return ["@type" => "HowToStep", "text" => $instruction];
        }, $instructions);
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateReviewSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "Review",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['item_reviewed'])) {
        $schema["itemReviewed"] = [
            "@type" => "Thing",
            "name" => $data['item_reviewed']
        ];
    }
    
    if (!empty($data['review_rating'])) {
        $schema["reviewRating"] = [
            "@type" => "Rating",
            "ratingValue" => $data['review_rating'],
            "bestRating" => $data['best_rating'] ?? 5
        ];
    }
    
    if (!empty($data['author'])) {
        $schema["author"] = [
            "@type" => "Person",
            "name" => $data['author']
        ];
    }
    
    if (!empty($data['date_published'])) {
        $schema["datePublished"] = formatDateForSchema($data['date_published']);
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateVideoObjectSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "VideoObject",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['thumbnail_url'])) {
        $schema["thumbnailUrl"] = $data['thumbnail_url'];
    }
    
    if (!empty($data['upload_date'])) {
        $schema["uploadDate"] = formatDateForSchema($data['upload_date']);
    }
    
    if (!empty($data['duration'])) {
        $schema["duration"] = $data['duration'];
    }
    
    if (!empty($data['embed_url'])) {
        $schema["embedUrl"] = $data['embed_url'];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateWebPageSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "WebPage",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['primary_image'])) {
        $schema["primaryImageOfPage"] = [
            "@type" => "ImageObject",
            "url" => $data['primary_image']
        ];
    }
    
    if (!empty($data['date_published'])) {
        $schema["datePublished"] = formatDateForSchema($data['date_published']);
    }
    
    if (!empty($data['date_modified'])) {
        $schema["dateModified"] = formatDateForSchema($data['date_modified']);
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}

function generateWebSiteSchema($title, $description, $url, $data) {
    $schema = [
        "@context" => "https://schema.org",
        "@type" => "WebSite",
        "name" => $title,
        "description" => $description,
        "url" => $url
    ];
    
    if (!empty($data['potential_action'])) {
        $schema["potentialAction"] = [
            "@type" => "SearchAction",
            "target" => $data['search_url'] ?? $url . "?q={search_term_string}",
            "query-input" => "required name=search_term_string"
        ];
    }
    
    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
}
?>

    <title>Advanced Schema Markup Generator 2026 - Professional JSON-LD Creator | Thiyagi</title>
    <meta name="description" content="Professional schema.org structured data generator 2026 with validation, multiple schema types, and SEO optimization. Generate JSON-LD markup for rich snippets and better search visibility.">
    <meta name="keywords" content="schema markup generator 2026, JSON-LD creator, structured data, schema.org, rich snippets, SEO optimization, microdata">
    <meta name="author" content="Thiyagi">
    
    <!-- Open Graph tags -->
    <meta property="og:title" content="Advanced Schema Markup Generator 2026 - Professional JSON-LD Creator">
    <meta property="og:description" content="Generate professional schema.org structured data 2026 with validation and optimization for better search engine visibility.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://livedu.in/schema-markup-generator.php">
    <meta property="og:site_name" content="Thiyagi">
    <meta property="og:image" content="https://livedu.in/images/schema-generator-og.jpg">
    
    <!-- Twitter Card tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Advanced Schema Markup Generator 2026">
    <meta name="twitter:description" content="Professional schema.org structured data generator 2026 with validation">
    <meta name="twitter:image" content="https://livedu.in/images/schema-generator-twitter.jpg">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebApplication",
        "name": "Advanced Schema Markup Generator 2026",
        "description": "Professional schema.org structured data generator 2026 with validation and multiple schema types",
        "url": "https://livedu.in/schema-markup-generator.php",
        "applicationCategory": "SEO Tool",
        "operatingSystem": "Any",
        "permissions": "Free to use",
        "offers": {
            "@type": "Offer",
            "price": "0",
            "priceCurrency": "USD"
        },
        "creator": {
            "@type": "Organization",
            "name": "Thiyagi"
        }
    }
    </script>
    
    <!-- Tailwind CSS -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af',
                        accent: '#f59e0b'
                    }
                }
            }
        }
    </script>
    
    <style>
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .animate-fadeIn { animation: fadeIn 0.6s ease-out; }
        .gradient-text {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            -webkit-background-clip: text;
            background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        .field-group { display: none; }
        .field-group.active { display: block; }
        .schema-preview {
            max-height: 500px;
            overflow-y: auto;
        }
    </style>
<body class="bg-gradient-to-br from-blue-50 via-white to-purple-50 min-h-screen">
    <!-- Header Section -->
    <div class="bg-white shadow-sm border-b">
        <div class="max-w-7xl mx-auto px-4 py-6">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold gradient-text mb-4">Advanced Schema Markup Generator 2026</h1>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">Professional schema.org structured data generator 2026 with validation, multiple schema types, and SEO optimization for rich snippets</p>
            </div>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 py-8">
        <!-- Features Section -->
        <div class="grid md:grid-cols-4 gap-6 mb-8">
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">JSON-LD Generation</h3>
                <p class="text-sm text-gray-600">Professional structured data markup</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Schema Validation</h3>
                <p class="text-sm text-gray-600">Automatic validation and error checking</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">Multiple Schema Types</h3>
                <p class="text-sm text-gray-600">15+ schema types supported</p>
            </div>
            
            <div class="bg-white rounded-xl shadow-md p-6 text-center animate-fadeIn">
                <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                    <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="font-semibold text-gray-800 mb-2">SEO Optimization</h3>
                <p class="text-sm text-gray-600">Rich snippets and search visibility</p>
            </div>
        </div>

        <!-- Schema Type Selection -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Select Schema Type</h2>
            <div class="grid md:grid-cols-3 lg:grid-cols-4 gap-4 mb-8">
                <?php foreach ($supportedTypes as $type => $info): ?>
                <label class="schema-type-card cursor-pointer block p-4 border-2 border-gray-200 rounded-lg hover:border-blue-500 hover:bg-blue-50 transition duration-200" onclick="selectSchemaType('<?php echo $type; ?>')">
                    <input type="radio" name="schema_type_display" value="<?php echo $type; ?>" class="hidden" <?php echo ($schemaType === $type) ? 'checked' : ''; ?>>
                    <div class="text-center">
                        <h3 class="font-semibold text-gray-800"><?php echo htmlspecialchars($info['name']); ?></h3>
                        <p class="text-sm text-gray-600 mt-1"><?php echo htmlspecialchars($info['description']); ?></p>
                    </div>
                </label>
                <?php endforeach; ?>
            </div>
        </div>

        <!-- Schema Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
            <form method="POST" class="space-y-6">
                <input type="hidden" name="schema_type" id="schema_type" value="<?php echo htmlspecialchars($schemaType); ?>">
                
                <div class="grid md:grid-cols-2 gap-6" id="schema-fields"></div>
                
                <button type="submit" class="w-full bg-gradient-to-r from-blue-600 to-purple-600 hover:from-blue-700 hover:to-purple-700 text-white font-bold py-4 px-8 rounded-lg transform transition duration-200 hover:scale-105 focus:outline-none focus:ring-4 focus:ring-blue-300">
                    <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                    </svg>
                    Generate Schema Markup
                </button>
            </form>
        </div>

        <!-- Error/Success Messages -->
        <?php if (!empty($error)): ?>
            <div class="bg-red-50 border-l-4 border-red-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-red-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-red-800">Error</h3>
                        <p class="text-red-700"><?php echo htmlspecialchars($error); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if (!empty($success)): ?>
            <div class="bg-green-50 border-l-4 border-green-500 rounded-lg p-6 mb-8 animate-fadeIn">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-green-500 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                    <div>
                        <h3 class="text-lg font-semibold text-green-800">Success!</h3>
                        <p class="text-green-700"><?php echo htmlspecialchars($success); ?></p>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <!-- Generated Schema Markup -->
        <?php if (!empty($schemaMarkup)): ?>
            <div class="bg-white rounded-2xl shadow-xl p-8 mb-8">
                <div class="flex justify-between items-center mb-6">
                    <h3 class="text-2xl font-bold text-gray-800">Generated Schema Markup</h3>
                    <span class="bg-blue-100 text-blue-800 px-4 py-2 rounded-full text-sm font-medium">
                        <?php echo ucfirst($schemaType); ?> Schema
                    </span>
                </div>
                
                <!-- Tabs -->
                <div class="border-b border-gray-200 mb-6">
                    <nav class="flex space-x-8">
                        <button class="tab-btn border-b-2 border-blue-500 text-blue-600 py-2 px-1 text-sm font-medium active" onclick="showTab('json-ld')">
                            JSON-LD
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('preview')">
                            Preview
                        </button>
                        <button class="tab-btn border-b-2 border-transparent text-gray-500 hover:text-gray-700 py-2 px-1 text-sm font-medium" onclick="showTab('validation')">
                            Validation
                        </button>
                    </nav>
                </div>
                
                <!-- JSON-LD Tab -->
                <div id="json-ld" class="tab-content">
                    <div class="schema-preview bg-gray-50 p-4 rounded-lg border border-gray-200 mb-6">
                        <pre class="text-gray-800 text-sm" id="schema-content"><?php echo htmlspecialchars($schemaMarkup); ?></pre>
                    </div>
                    
                    <div class="grid md:grid-cols-3 gap-4">
                        <button onclick="copyToClipboard('schema-content')" 
                                class="bg-gradient-to-r from-blue-500 to-blue-600 hover:from-blue-600 hover:to-blue-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 16H6a2 2 0 01-2-2V6a2 2 0 012-2h8a2 2 0 012 2v2m-6 12h8a2 2 0 002-2v-8a2 2 0 00-2-2h-8a2 2 0 00-2 2v8a2 2 0 002 2z"></path>
                            </svg>
                            Copy JSON-LD
                        </button>
                        <a href="data:application/json;charset=utf-8,<?php echo urlencode($schemaMarkup); ?>" download="schema.json" 
                           class="bg-gradient-to-r from-green-500 to-green-600 hover:from-green-600 hover:to-green-700 text-white font-bold py-3 px-6 rounded-lg text-center transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                            Download JSON
                        </a>
                        <button onclick="validateSchema()" 
                                class="bg-gradient-to-r from-purple-500 to-purple-600 hover:from-purple-600 hover:to-purple-700 text-white font-bold py-3 px-6 rounded-lg transition duration-200 transform hover:scale-105">
                            <svg class="w-5 h-5 inline-block mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                            </svg>
                            Validate
                        </button>
                    </div>
                </div>
                
                <!-- Preview Tab -->
                <div id="preview" class="tab-content hidden">
                    <div class="bg-gray-50 p-6 rounded-lg border border-gray-200">
                        <h4 class="font-semibold text-gray-800 mb-4">How to Implement</h4>
                        <ol class="list-decimal list-inside space-y-2 text-gray-600">
                            <li>Copy the JSON-LD code above</li>
                            <li>Paste it in your HTML &lt;head&gt; section within &lt;script type="application/ld+json"&gt; tags</li>
                            <li>Test your markup using Google's Rich Results Test</li>
                            <li>Submit your page to Google Search Console</li>
                        </ol>
                        
                        <div class="mt-6 p-4 bg-blue-50 rounded-lg">
                            <h5 class="font-semibold text-blue-800 mb-2">HTML Implementation:</h5>
                            <pre class="text-sm text-blue-700 overflow-x-auto"><code>&lt;script type="application/ld+json"&gt;
<?php echo htmlspecialchars($schemaMarkup); ?>
&lt;/script&gt;</code></pre>
                        </div>
                    </div>
                </div>
                
                <!-- Validation Tab -->
                <div id="validation" class="tab-content hidden">
                    <?php if ($validationResult): ?>
                        <div class="space-y-4">
                            <div class="<?php echo $validationResult['valid'] ? 'bg-green-50 border-green-200' : 'bg-red-50 border-red-200'; ?> border p-4 rounded-lg">
                                <h4 class="font-semibold <?php echo $validationResult['valid'] ? 'text-green-800' : 'text-red-800'; ?> mb-2">
                                    <?php echo $validationResult['valid'] ? '✓ Schema is Valid' : '✗ Validation Errors Found'; ?>
                                </h4>
                                <?php if (!empty($validationResult['errors'])): ?>
                                    <ul class="list-disc list-inside text-red-700 space-y-1">
                                        <?php foreach ($validationResult['errors'] as $error): ?>
                                            <li><?php echo htmlspecialchars($error); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else: ?>
                                    <p class="text-green-700">Your schema markup is valid and ready for implementation!</p>
                                <?php endif; ?>
                            </div>
                            
                            <div class="bg-blue-50 p-4 rounded-lg">
                                <h4 class="font-semibold text-blue-800 mb-2">External Validation Tools</h4>
                                <div class="space-y-2">
                                    <a href="https://search.google.com/test/rich-results" target="_blank" class="inline-block text-blue-600 hover:text-blue-800 underline">Google Rich Results Test</a><br>
                                    <a href="https://validator.schema.org/" target="_blank" class="inline-block text-blue-600 hover:text-blue-800 underline">Schema.org Validator</a><br>
                                    <a href="https://jsonld.com/json-ld-validator/" target="_blank" class="inline-block text-blue-600 hover:text-blue-800 underline">JSON-LD Validator</a>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endif; ?>
    </div>

    <!-- Info Section -->
    <div class="max-w-7xl mx-auto px-4 py-12">
        <div class="bg-white rounded-2xl shadow-xl p-8">
            <h2 class="text-3xl font-bold text-gray-800 mb-8 text-center">Schema Types Guide</h2>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="p-6 border border-gray-200 rounded-lg">
                    <h3 class="font-semibold text-gray-800 mb-2">Content Schemas</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Article - Blog posts and articles</li>
                        <li>• News Article - News content</li>
                        <li>• Web Page - Individual pages</li>
                        <li>• Video - Video content</li>
                    </ul>
                </div>
                
                <div class="p-6 border border-gray-200 rounded-lg">
                    <h3 class="font-semibold text-gray-800 mb-2">Business Schemas</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Local Business - Physical locations</li>
                        <li>• Organization - Companies</li>
                        <li>• Product - E-commerce items</li>
                        <li>• Job Posting - Employment ads</li>
                    </ul>
                </div>
                
                <div class="p-6 border border-gray-200 rounded-lg">
                    <h3 class="font-semibold text-gray-800 mb-2">Creative Schemas</h3>
                    <ul class="text-sm text-gray-600 space-y-1">
                        <li>• Recipe - Cooking instructions</li>
                        <li>• Book - Published books</li>
                        <li>• Course - Educational content</li>
                        <li>• Event - Scheduled events</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-8 mt-12">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h3 class="text-lg font-semibold mb-2">Advanced Schema Markup Generator 2026</h3>
            <p class="text-gray-300">Professional structured data generator 2026 by Thiyagi - Free forever</p>
            <p class="text-gray-400 text-sm mt-2">Help search engines understand your content better with schema.org markup in 2026</p>
        </div>
    </footer>

    <script>
        // Schema type selection
        let currentSchemaType = '<?php echo $schemaType; ?>';
        
        function selectSchemaType(type) {
            currentSchemaType = type;
            document.getElementById('schema_type').value = type;
            
            // Update visual selection
            document.querySelectorAll('.schema-type-card').forEach(card => {
                card.classList.remove('border-blue-500', 'bg-blue-50');
                card.classList.add('border-gray-200');
            });
            
            event.target.closest('.schema-type-card').classList.remove('border-gray-200');
            event.target.closest('.schema-type-card').classList.add('border-blue-500', 'bg-blue-50');
            
            // Generate dynamic form fields
            generateSchemaFields(type);
        }
        
        function generateSchemaFields(type) {
            const container = document.getElementById('schema-fields');
            const typeInfo = <?php echo json_encode($supportedTypes); ?>[type];
            
            if (!typeInfo) return;
            
            let fieldsHTML = '';
            
            typeInfo.fields.forEach(field => {
                const fieldName = field === 'title' || field === 'name' ? 'title' : field;
                const fieldLabel = field.charAt(0).toUpperCase() + field.slice(1).replace(/([A-Z])/g, ' $1');
                
                let inputHTML = '';
                
                if (field === 'description') {
                    inputHTML = `<textarea name="${fieldName}" rows="3" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter ${fieldLabel.toLowerCase()}"></textarea>`;
                } else if (field.includes('date') || field.includes('Date')) {
                    inputHTML = `<input type="date" name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">`;
                } else if (field === 'price') {
                    inputHTML = `<input type="number" step="0.01" name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="0.00">`;
                } else if (field === 'rating') {
                    inputHTML = `<input type="number" min="1" max="5" step="0.1" name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="1-5">`;
                } else if (field === 'currency') {
                    inputHTML = `<select name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="USD">USD - US Dollar</option>
                        <option value="EUR">EUR - Euro</option>
                        <option value="GBP">GBP - British Pound</option>
                        <option value="INR">INR - Indian Rupee</option>
                        <option value="JPY">JPY - Japanese Yen</option>
                    </select>`;
                } else if (field === 'availability') {
                    inputHTML = `<select name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                        <option value="InStock">In Stock</option>
                        <option value="OutOfStock">Out of Stock</option>
                        <option value="PreOrder">Pre Order</option>
                        <option value="LimitedAvailability">Limited Availability</option>
                    </select>`;
                } else {
                    const inputType = field.includes('url') || field.includes('website') || field.includes('image') ? 'url' : 
                                    field.includes('email') ? 'email' : 
                                    field.includes('phone') || field.includes('telephone') ? 'tel' : 'text';
                    inputHTML = `<input type="${inputType}" name="${fieldName}" class="w-full px-4 py-3 border-2 border-gray-200 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="Enter ${fieldLabel.toLowerCase()}">`;
                }
                
                fieldsHTML += `
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-2">${fieldLabel} ${field === 'title' || field === 'name' || field === 'description' ? '*' : ''}</label>
                        ${inputHTML}
                    </div>
                `;
            });
            
            container.innerHTML = fieldsHTML;
        }
        
        // Tab functionality  
        function showTab(tabName) {
            document.querySelectorAll('.tab-content').forEach(content => {
                content.classList.add('hidden');
            });
            
            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('active', 'border-blue-500', 'text-blue-600');
                btn.classList.add('border-transparent', 'text-gray-500');
            });
            
            document.getElementById(tabName).classList.remove('hidden');
            
            event.target.classList.remove('border-transparent', 'text-gray-500');
            event.target.classList.add('active', 'border-blue-500', 'text-blue-600');
        }
        
        // Copy functionality
        function copyToClipboard(elementId) {
            const element = document.getElementById(elementId);
            const text = element.textContent;
            
            if (navigator.clipboard) {
                navigator.clipboard.writeText(text).then(() => {
                    showNotification('Schema markup copied to clipboard!', 'success');
                });
            }
        }
        
        // Validate schema
        function validateSchema() {
            const schemaContent = document.getElementById('schema-content').textContent;
            
            try {
                JSON.parse(schemaContent);
                showNotification('✓ JSON-LD is valid!', 'success');
            } catch (error) {
                showNotification('JSON validation failed: ' + error.message, 'error');
            }
        }
        
        // Show notification
        function showNotification(message, type) {
            const notification = document.createElement('div');
            notification.className = `fixed top-4 right-4 p-4 rounded-lg shadow-lg z-50 ${
                type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
            }`;
            notification.textContent = message;
            
            document.body.appendChild(notification);
            
            setTimeout(() => {
                notification.style.opacity = '0';
                setTimeout(() => {
                    document.body.removeChild(notification);
                }, 300);
            }, 3000);
        }
        
        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            generateSchemaFields(currentSchemaType);
            
            const form = document.querySelector('form');
            const submitButton = form.querySelector('button[type="submit"]');
            
            form.addEventListener('submit', function() {
                submitButton.innerHTML = `
                    <svg class="w-5 h-5 animate-spin inline-block mr-2" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    Generating Schema...
                `;
                submitButton.disabled = true;
            });
        });
    </script>
</body>
</html>
                        <select id="schema_type" name="schema_type" class="w-full p-2 border rounded" onchange="toggleSchemaFields()">
                            <?php foreach ($allSchemaTypes as $value => $label): ?>
                                <option value="<?= $value ?>" <?= $schemaType === $value ? 'selected' : '' ?>><?= $label ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                
                <!-- Common Fields -->
                <div id="common-fields" class="field-group">
                    <div class="mb-4">
                        <label for="title" class="block text-gray-700 font-bold mb-2">Title/Name:</label>
                        <input type="text" id="title" name="title" class="w-full p-2 border rounded" value="<?= isset($_POST['title']) ? htmlspecialchars($_POST['title']) : '' ?>" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
                        <textarea id="description" name="description" rows="3" class="w-full p-2 border rounded" required><?= isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '' ?></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="url" class="block text-gray-700 font-bold mb-2">URL:</label>
                        <input type="url" id="url" name="url" class="w-full p-2 border rounded" value="<?= isset($_POST['url']) ? htmlspecialchars($_POST['url']) : '' ?>" required>
                    </div>
                </div>
                
                <!-- Article Fields -->
                <div id="article-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="date_published" class="block text-gray-700 font-bold mb-2">Date Published:</label>
                        <input type="date" id="date_published" name="date_published" class="w-full p-2 border rounded" value="<?= isset($_POST['date_published']) ? htmlspecialchars($_POST['date_published']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_modified" class="block text-gray-700 font-bold mb-2">Date Modified:</label>
                        <input type="date" id="date_modified" name="date_modified" class="w-full p-2 border rounded" value="<?= isset($_POST['date_modified']) ? htmlspecialchars($_POST['date_modified']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="author_name" class="block text-gray-700 font-bold mb-2">Author Name:</label>
                        <input type="text" id="author_name" name="author_name" class="w-full p-2 border rounded" value="<?= isset($_POST['author_name']) ? htmlspecialchars($_POST['author_name']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="publisher_name" class="block text-gray-700 font-bold mb-2">Publisher Name:</label>
                        <input type="text" id="publisher_name" name="publisher_name" class="w-full p-2 border rounded" value="<?= isset($_POST['publisher_name']) ? htmlspecialchars($_POST['publisher_name']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="publisher_logo" class="block text-gray-700 font-bold mb-2">Publisher Logo URL:</label>
                        <input type="url" id="publisher_logo" name="publisher_logo" class="w-full p-2 border rounded" value="<?= isset($_POST['publisher_logo']) ? htmlspecialchars($_POST['publisher_logo']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                        <input type="url" id="image_url" name="image_url" class="w-full p-2 border rounded" value="<?= isset($_POST['image_url']) ? htmlspecialchars($_POST['image_url']) : '' ?>">
                    </div>
                </div>
                
                <!-- Product Fields -->
                <div id="product-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                        <input type="url" id="image_url" name="image_url" class="w-full p-2 border rounded" value="<?= isset($_POST['image_url']) ? htmlspecialchars($_POST['image_url']) : '' ?>" required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="brand" class="block text-gray-700 font-bold mb-2">Brand:</label>
                        <input type="text" id="brand" name="brand" class="w-full p-2 border rounded" value="<?= isset($_POST['brand']) ? htmlspecialchars($_POST['brand']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="sku" class="block text-gray-700 font-bold mb-2">SKU:</label>
                        <input type="text" id="sku" name="sku" class="w-full p-2 border rounded" value="<?= isset($_POST['sku']) ? htmlspecialchars($_POST['sku']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="gtin" class="block text-gray-700 font-bold mb-2">GTIN:</label>
                        <input type="text" id="gtin" name="gtin" class="w-full p-2 border rounded" value="<?= isset($_POST['gtin']) ? htmlspecialchars($_POST['gtin']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="price" class="block text-gray-700 font-bold mb-2">Price:</label>
                        <input type="number" step="0.01" id="price" name="price" class="w-full p-2 border rounded" value="<?= isset($_POST['price']) ? htmlspecialchars($_POST['price']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="price_currency" class="block text-gray-700 font-bold mb-2">Price Currency:</label>
                        <input type="text" id="price_currency" name="price_currency" class="w-full p-2 border rounded" value="<?= isset($_POST['price_currency']) ? htmlspecialchars($_POST['price_currency']) : 'USD' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="price_valid_until" class="block text-gray-700 font-bold mb-2">Price Valid Until:</label>
                        <input type="date" id="price_valid_until" name="price_valid_until" class="w-full p-2 border rounded" value="<?= isset($_POST['price_valid_until']) ? htmlspecialchars($_POST['price_valid_until']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="availability" class="block text-gray-700 font-bold mb-2">Availability:</label>
                        <select id="availability" name="availability" class="w-full p-2 border rounded">
                            <option value="https://schema.org/InStock" <?= (isset($_POST['availability']) && $_POST['availability'] === 'https://schema.org/InStock') ? 'selected' : '' ?>>In Stock</option>
                            <option value="https://schema.org/OutOfStock" <?= (isset($_POST['availability']) && $_POST['availability'] === 'https://schema.org/OutOfStock') ? 'selected' : '' ?>>Out of Stock</option>
                            <option value="https://schema.org/PreOrder" <?= (isset($_POST['availability']) && $_POST['availability'] === 'https://schema.org/PreOrder') ? 'selected' : '' ?>>Pre-Order</option>
                            <option value="https://schema.org/Discontinued" <?= (isset($_POST['availability']) && $_POST['availability'] === 'https://schema.org/Discontinued') ? 'selected' : '' ?>>Discontinued</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="rating_value" class="block text-gray-700 font-bold mb-2">Rating Value (1-5):</label>
                        <input type="number" step="0.1" min="1" max="5" id="rating_value" name="rating_value" class="w-full p-2 border rounded" value="<?= isset($_POST['rating_value']) ? htmlspecialchars($_POST['rating_value']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="review_count" class="block text-gray-700 font-bold mb-2">Review Count:</label>
                        <input type="number" id="review_count" name="review_count" class="w-full p-2 border rounded" value="<?= isset($_POST['review_count']) ? htmlspecialchars($_POST['review_count']) : '' ?>">
                    </div>
                </div>
                
                <!-- Book Fields -->
                <div id="book-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="image_url" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                        <input type="url" id="image_url" name="image_url" class="w-full p-2 border rounded" value="<?= isset($_POST['image_url']) ? htmlspecialchars($_POST['image_url']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="author_name" class="block text-gray-700 font-bold mb-2">Author Name:</label>
                        <input type="text" id="author_name" name="author_name" class="w-full p-2 border rounded" value="<?= isset($_POST['author_name']) ? htmlspecialchars($_POST['author_name']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="isbn" class="block text-gray-700 font-bold mb-2">ISBN:</label>
                        <input type="text" id="isbn" name="isbn" class="w-full p-2 border rounded" value="<?= isset($_POST['isbn']) ? htmlspecialchars($_POST['isbn']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="publisher" class="block text-gray-700 font-bold mb-2">Publisher:</label>
                        <input type="text" id="publisher" name="publisher" class="w-full p-2 border rounded" value="<?= isset($_POST['publisher']) ? htmlspecialchars($_POST['publisher']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_published" class="block text-gray-700 font-bold mb-2">Date Published:</label>
                        <input type="date" id="date_published" name="date_published" class="w-full p-2 border rounded" value="<?= isset($_POST['date_published']) ? htmlspecialchars($_POST['date_published']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="book_edition" class="block text-gray-700 font-bold mb-2">Edition:</label>
                        <input type="text" id="book_edition" name="book_edition" class="w-full p-2 border rounded" value="<?= isset($_POST['book_edition']) ? htmlspecialchars($_POST['book_edition']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="number_of_pages" class="block text-gray-700 font-bold mb-2">Number of Pages:</label>
                        <input type="number" id="number_of_pages" name="number_of_pages" class="w-full p-2 border rounded" value="<?= isset($_POST['number_of_pages']) ? htmlspecialchars($_POST['number_of_pages']) : '' ?>">
                    </div>
                </div>
                
                <!-- Course Fields -->
                <div id="course-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="course_code" class="block text-gray-700 font-bold mb-2">Course Code:</label>
                        <input type="text" id="course_code" name="course_code" class="w-full p-2 border rounded" value="<?= isset($_POST['course_code']) ? htmlspecialchars($_POST['course_code']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="provider" class="block text-gray-700 font-bold mb-2">Provider:</label>
                        <input type="text" id="provider" name="provider" class="w-full p-2 border rounded" value="<?= isset($_POST['provider']) ? htmlspecialchars($_POST['provider']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="course_prerequisites" class="block text-gray-700 font-bold mb-2">Prerequisites:</label>
                        <textarea id="course_prerequisites" name="course_prerequisites" rows="3" class="w-full p-2 border rounded"><?= isset($_POST['course_prerequisites']) ? htmlspecialchars($_POST['course_prerequisites']) : '' ?></textarea>
                    </div>
                </div>
                
                <!-- Event Fields -->
                <div id="event-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="start_date" class="block text-gray-700 font-bold mb-2">Start Date:</label>
                        <input type="datetime-local" id="start_date" name="start_date" class="w-full p-2 border rounded" value="<?= isset($_POST['start_date']) ? htmlspecialchars($_POST['start_date']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="end_date" class="block text-gray-700 font-bold mb-2">End Date:</label>
                        <input type="datetime-local" id="end_date" name="end_date" class="w-full p-2 border rounded" value="<?= isset($_POST['end_date']) ? htmlspecialchars($_POST['end_date']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="location_name" class="block text-gray-700 font-bold mb-2">Location Name:</label>
                        <input type="text" id="location_name" name="location_name" class="w-full p-2 border rounded" value="<?= isset($_POST['location_name']) ? htmlspecialchars($_POST['location_name']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="location_address" class="block text-gray-700 font-bold mb-2">Location Address:</label>
                        <input type="text" id="location_address" name="location_address" class="w-full p-2 border rounded" value="<?= isset($_POST['location_address']) ? htmlspecialchars($_POST['location_address']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="event_status" class="block text-gray-700 font-bold mb-2">Event Status:</label>
                        <select id="event_status" name="event_status" class="w-full p-2 border rounded">
                            <option value="EventScheduled" <?= (isset($_POST['event_status']) && $_POST['event_status'] === 'EventScheduled') ? 'selected' : '' ?>>Scheduled</option>
                            <option value="EventCancelled" <?= (isset($_POST['event_status']) && $_POST['event_status'] === 'EventCancelled') ? 'selected' : '' ?>>Cancelled</option>
                            <option value="EventPostponed" <?= (isset($_POST['event_status']) && $_POST['event_status'] === 'EventPostponed') ? 'selected' : '' ?>>Postponed</option>
                            <option value="EventRescheduled" <?= (isset($_POST['event_status']) && $_POST['event_status'] === 'EventRescheduled') ? 'selected' : '' ?>>Rescheduled</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="organizer" class="block text-gray-700 font-bold mb-2">Organizer:</label>
                        <input type="text" id="organizer" name="organizer" class="w-full p-2 border rounded" value="<?= isset($_POST['organizer']) ? htmlspecialchars($_POST['organizer']) : '' ?>">
                    </div>
                </div>
                
                <!-- Job Posting Fields -->
                <div id="jobposting-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="hiring_organization" class="block text-gray-700 font-bold mb-2">Hiring Organization:</label>
                        <input type="text" id="hiring_organization" name="hiring_organization" class="w-full p-2 border rounded" value="<?= isset($_POST['hiring_organization']) ? htmlspecialchars($_POST['hiring_organization']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="job_location" class="block text-gray-700 font-bold mb-2">Job Location:</label>
                        <input type="text" id="job_location" name="job_location" class="w-full p-2 border rounded" value="<?= isset($_POST['job_location']) ? htmlspecialchars($_POST['job_location']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_posted" class="block text-gray-700 font-bold mb-2">Date Posted:</label>
                        <input type="date" id="date_posted" name="date_posted" class="w-full p-2 border rounded" value="<?= isset($_POST['date_posted']) ? htmlspecialchars($_POST['date_posted']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="valid_through" class="block text-gray-700 font-bold mb-2">Valid Through:</label>
                        <input type="date" id="valid_through" name="valid_through" class="w-full p-2 border rounded" value="<?= isset($_POST['valid_through']) ? htmlspecialchars($_POST['valid_through']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="employment_type" class="block text-gray-700 font-bold mb-2">Employment Type:</label>
                        <select id="employment_type" name="employment_type" class="w-full p-2 border rounded">
                            <option value="FULL_TIME" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'FULL_TIME') ? 'selected' : '' ?>>Full-time</option>
                            <option value="PART_TIME" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'PART_TIME') ? 'selected' : '' ?>>Part-time</option>
                            <option value="CONTRACTOR" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'CONTRACTOR') ? 'selected' : '' ?>>Contractor</option>
                            <option value="TEMPORARY" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'TEMPORARY') ? 'selected' : '' ?>>Temporary</option>
                            <option value="INTERN" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'INTERN') ? 'selected' : '' ?>>Intern</option>
                            <option value="VOLUNTEER" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'VOLUNTEER') ? 'selected' : '' ?>>Volunteer</option>
                            <option value="PER_DIEM" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'PER_DIEM') ? 'selected' : '' ?>>Per Diem</option>
                            <option value="OTHER" <?= (isset($_POST['employment_type']) && $_POST['employment_type'] === 'OTHER') ? 'selected' : '' ?>>Other</option>
                        </select>
                    </div>
                    
                    <div class="mb-4">
                        <label for="base_salary" class="block text-gray-700 font-bold mb-2">Base Salary:</label>
                        <input type="number" step="0.01" id="base_salary" name="base_salary" class="w-full p-2 border rounded" value="<?= isset($_POST['base_salary']) ? htmlspecialchars($_POST['base_salary']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="salary_currency" class="block text-gray-700 font-bold mb-2">Salary Currency:</label>
                        <input type="text" id="salary_currency" name="salary_currency" class="w-full p-2 border rounded" value="<?= isset($_POST['salary_currency']) ? htmlspecialchars($_POST['salary_currency']) : 'USD' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="salary_unit" class="block text-gray-700 font-bold mb-2">Salary Unit:</label>
                        <select id="salary_unit" name="salary_unit" class="w-full p-2 border rounded">
                            <option value="HOUR" <?= (isset($_POST['salary_unit']) && $_POST['salary_unit'] === 'HOUR') ? 'selected' : '' ?>>Per Hour</option>
                            <option value="DAY" <?= (isset($_POST['salary_unit']) && $_POST['salary_unit'] === 'DAY') ? 'selected' : '' ?>>Per Day</option>
                            <option value="WEEK" <?= (isset($_POST['salary_unit']) && $_POST['salary_unit'] === 'WEEK') ? 'selected' : '' ?>>Per Week</option>
                            <option value="MONTH" <?= (isset($_POST['salary_unit']) && $_POST['salary_unit'] === 'MONTH') ? 'selected' : '' ?>>Per Month</option>
                            <option value="YEAR" <?= (isset($_POST['salary_unit']) && $_POST['salary_unit'] === 'YEAR') ? 'selected' : '' ?>>Per Year</option>
                        </select>
                    </div>
                </div>
                
                <!-- Local Business Fields -->
                <div id="localbusiness-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="address" class="block text-gray-700 font-bold mb-2">Address:</label>
                        <input type="text" id="address" name="address" class="w-full p-2 border rounded" value="<?= isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="phone" class="block text-gray-700 font-bold mb-2">Phone Number:</label>
                        <input type="tel" id="phone" name="phone" class="w-full p-2 border rounded" value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="opening_hours" class="block text-gray-700 font-bold mb-2">Opening Hours:</label>
                        <input type="text" id="opening_hours" name="opening_hours" placeholder="e.g., Mo-Fr 09:00-17:00" class="w-full p-2 border rounded" value="<?= isset($_POST['opening_hours']) ? htmlspecialchars($_POST['opening_hours']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="price_range" class="block text-gray-700 font-bold mb-2">Price Range:</label>
                        <input type="text" id="price_range" name="price_range" placeholder="e.g., $$$" class="w-full p-2 border rounded" value="<?= isset($_POST['price_range']) ? htmlspecialchars($_POST['price_range']) : '' ?>">
                    </div>
                </div>
                
                <!-- Organization Fields -->
                <div id="organization-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="logo" class="block text-gray-700 font-bold mb-2">Logo URL:</label>
                        <input type="url" id="logo" name="logo" class="w-full p-2 border rounded" value="<?= isset($_POST['logo']) ? htmlspecialchars($_POST['logo']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="same_as" class="block text-gray-700 font-bold mb-2">Social Profiles (comma separated):</label>
                        <input type="text" id="same_as" name="same_as" placeholder="e.g., https://facebook.com/example, https://twitter.com/example" class="w-full p-2 border rounded" value="<?= isset($_POST['same_as']) ? htmlspecialchars($_POST['same_as']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="contact_phone" class="block text-gray-700 font-bold mb-2">Contact Phone:</label>
                        <input type="tel" id="contact_phone" name="contact_phone" class="w-full p-2 border rounded" value="<?= isset($_POST['contact_phone']) ? htmlspecialchars($_POST['contact_phone']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="contact_type" class="block text-gray-700 font-bold mb-2">Contact Type:</label>
                        <input type="text" id="contact_type" name="contact_type" placeholder="e.g., customer service" class="w-full p-2 border rounded" value="<?= isset($_POST['contact_type']) ? htmlspecialchars($_POST['contact_type']) : '' ?>">
                    </div>
                </div>
                
                <!-- Person Fields -->
                <div id="person-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                        <input type="url" id="image" name="image" class="w-full p-2 border rounded" value="<?= isset($_POST['image']) ? htmlspecialchars($_POST['image']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="job_title" class="block text-gray-700 font-bold mb-2">Job Title:</label>
                        <input type="text" id="job_title" name="job_title" class="w-full p-2 border rounded" value="<?= isset($_POST['job_title']) ? htmlspecialchars($_POST['job_title']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="same_as" class="block text-gray-700 font-bold mb-2">Social Profiles (comma separated):</label>
                        <input type="text" id="same_as" name="same_as" placeholder="e.g., https://facebook.com/example, https://twitter.com/example" class="w-full p-2 border rounded" value="<?= isset($_POST['same_as']) ? htmlspecialchars($_POST['same_as']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="works_for" class="block text-gray-700 font-bold mb-2">Works For:</label>
                        <input type="text" id="works_for" name="works_for" class="w-full p-2 border rounded" value="<?= isset($_POST['works_for']) ? htmlspecialchars($_POST['works_for']) : '' ?>">
                    </div>
                </div>
                
                <!-- Recipe Fields -->
                <div id="recipe-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="image" class="block text-gray-700 font-bold mb-2">Image URL:</label>
                        <input type="url" id="image" name="image" class="w-full p-2 border rounded" value="<?= isset($_POST['image']) ? htmlspecialchars($_POST['image']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 font-bold mb-2">Author:</label>
                        <input type="text" id="author" name="author" class="w-full p-2 border rounded" value="<?= isset($_POST['author']) ? htmlspecialchars($_POST['author']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="prep_time" class="block text-gray-700 font-bold mb-2">Prep Time (e.g., PT30M):</label>
                        <input type="text" id="prep_time" name="prep_time" placeholder="ISO 8601 duration format" class="w-full p-2 border rounded" value="<?= isset($_POST['prep_time']) ? htmlspecialchars($_POST['prep_time']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="cook_time" class="block text-gray-700 font-bold mb-2">Cook Time (e.g., PT1H):</label>
                        <input type="text" id="cook_time" name="cook_time" placeholder="ISO 8601 duration format" class="w-full p-2 border rounded" value="<?= isset($_POST['cook_time']) ? htmlspecialchars($_POST['cook_time']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="total_time" class="block text-gray-700 font-bold mb-2">Total Time (e.g., PT1H30M):</label>
                        <input type="text" id="total_time" name="total_time" placeholder="ISO 8601 duration format" class="w-full p-2 border rounded" value="<?= isset($_POST['total_time']) ? htmlspecialchars($_POST['total_time']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="recipe_yield" class="block text-gray-700 font-bold mb-2">Yield (e.g., 4 servings):</label>
                        <input type="text" id="recipe_yield" name="recipe_yield" class="w-full p-2 border rounded" value="<?= isset($_POST['recipe_yield']) ? htmlspecialchars($_POST['recipe_yield']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="recipe_ingredients" class="block text-gray-700 font-bold mb-2">Ingredients (one per line):</label>
                        <textarea id="recipe_ingredients" name="recipe_ingredients" rows="5" class="w-full p-2 border rounded"><?= isset($_POST['recipe_ingredients']) ? htmlspecialchars($_POST['recipe_ingredients']) : '' ?></textarea>
                    </div>
                    
                    <div class="mb-4">
                        <label for="recipe_instructions" class="block text-gray-700 font-bold mb-2">Instructions (one per line):</label>
                        <textarea id="recipe_instructions" name="recipe_instructions" rows="5" class="w-full p-2 border rounded"><?= isset($_POST['recipe_instructions']) ? htmlspecialchars($_POST['recipe_instructions']) : '' ?></textarea>
                    </div>
                </div>
                
                <!-- Review Fields -->
                <div id="review-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="item_reviewed" class="block text-gray-700 font-bold mb-2">Item Reviewed:</label>
                        <input type="text" id="item_reviewed" name="item_reviewed" class="w-full p-2 border rounded" value="<?= isset($_POST['item_reviewed']) ? htmlspecialchars($_POST['item_reviewed']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="review_rating" class="block text-gray-700 font-bold mb-2">Rating Value (1-5):</label>
                        <input type="number" step="0.1" min="1" max="5" id="review_rating" name="review_rating" class="w-full p-2 border rounded" value="<?= isset($_POST['review_rating']) ? htmlspecialchars($_POST['review_rating']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="best_rating" class="block text-gray-700 font-bold mb-2">Best Rating:</label>
                        <input type="number" id="best_rating" name="best_rating" class="w-full p-2 border rounded" value="<?= isset($_POST['best_rating']) ? htmlspecialchars($_POST['best_rating']) : '5' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="author" class="block text-gray-700 font-bold mb-2">Author:</label>
                        <input type="text" id="author" name="author" class="w-full p-2 border rounded" value="<?= isset($_POST['author']) ? htmlspecialchars($_POST['author']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_published" class="block text-gray-700 font-bold mb-2">Date Published:</label>
                        <input type="date" id="date_published" name="date_published" class="w-full p-2 border rounded" value="<?= isset($_POST['date_published']) ? htmlspecialchars($_POST['date_published']) : '' ?>">
                    </div>
                </div>
                
                <!-- Video Fields -->
                <div id="videoobject-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="thumbnail_url" class="block text-gray-700 font-bold mb-2">Thumbnail URL:</label>
                        <input type="url" id="thumbnail_url" name="thumbnail_url" class="w-full p-2 border rounded" value="<?= isset($_POST['thumbnail_url']) ? htmlspecialchars($_POST['thumbnail_url']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="upload_date" class="block text-gray-700 font-bold mb-2">Upload Date:</label>
                        <input type="date" id="upload_date" name="upload_date" class="w-full p-2 border rounded" value="<?= isset($_POST['upload_date']) ? htmlspecialchars($_POST['upload_date']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="duration" class="block text-gray-700 font-bold mb-2">Duration (e.g., PT1H33M):</label>
                        <input type="text" id="duration" name="duration" placeholder="ISO 8601 duration format" class="w-full p-2 border rounded" value="<?= isset($_POST['duration']) ? htmlspecialchars($_POST['duration']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="embed_url" class="block text-gray-700 font-bold mb-2">Embed URL:</label>
                        <input type="url" id="embed_url" name="embed_url" class="w-full p-2 border rounded" value="<?= isset($_POST['embed_url']) ? htmlspecialchars($_POST['embed_url']) : '' ?>">
                    </div>
                </div>
                
                <!-- Web Page Fields -->
                <div id="webpage-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="primary_image" class="block text-gray-700 font-bold mb-2">Primary Image URL:</label>
                        <input type="url" id="primary_image" name="primary_image" class="w-full p-2 border rounded" value="<?= isset($_POST['primary_image']) ? htmlspecialchars($_POST['primary_image']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_published" class="block text-gray-700 font-bold mb-2">Date Published:</label>
                        <input type="date" id="date_published" name="date_published" class="w-full p-2 border rounded" value="<?= isset($_POST['date_published']) ? htmlspecialchars($_POST['date_published']) : '' ?>">
                    </div>
                    
                    <div class="mb-4">
                        <label for="date_modified" class="block text-gray-700 font-bold mb-2">Date Modified:</label>
                        <input type="date" id="date_modified" name="date_modified" class="w-full p-2 border rounded" value="<?= isset($_POST['date_modified']) ? htmlspecialchars($_POST['date_modified']) : '' ?>">
                    </div>
                </div>
                
                <!-- Web Site Fields -->
                <div id="website-fields" class="field-group hidden">
                    <div class="mb-4">
                        <label for="search_url" class="block text-gray-700 font-bold mb-2">Search URL (optional):</label>
                        <input type="url" id="search_url" name="search_url" placeholder="e.g., https://example.com/search?q={search_term_string}" class="w-full p-2 border rounded" value="<?= isset($_POST['search_url']) ? htmlspecialchars($_POST['search_url']) : '' ?>">
                    </div>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded transition duration-200 mt-6">
                    Generate Schema Markup
                </button>
            </form>
        </div>
        
        <?php if (!empty($schemaMarkup)): ?>
            <div class="bg-white rounded-lg shadow-md p-6">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="text-2xl font-bold text-gray-800">Generated Schema Markup</h2>
                    <button id="copy-btn" onclick="copyToClipboard()" class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-bold py-2 px-4 rounded transition duration-200">
                        Copy to Clipboard
                    </button>
                </div>
                <pre id="schema-markup" class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><?= htmlspecialchars($schemaMarkup) ?></pre>
                <p class="mt-4 text-gray-600">Paste this JSON-LD code in the &lt;head&gt; section of your HTML page.</p>
            </div>
        <?php elseif (!empty($error)): ?>
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-6">
                <p><?= htmlspecialchars($error) ?></p>
            </div>
        <?php endif; ?>
    </div>
</body>

<?php include 'footer.php';?>

</html>
