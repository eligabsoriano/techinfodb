-- -- Add foreign key to memory table to link to motherboard
-- ALTER TABLE memory
-- ADD COLUMN motherboard_id INT,
-- ADD CONSTRAINT fk_memory_motherboard
-- FOREIGN KEY (motherboard_id) REFERENCES motherboard(id);

-- -- Add foreign key to cpu_cooler table to link to motherboard
-- ALTER TABLE cpu_cooler
-- ADD COLUMN motherboard_id INT,
-- ADD CONSTRAINT fk_cooler_motherboard
-- FOREIGN KEY (motherboard_id) REFERENCES motherboard(id);

-- -- Add foreign key to processor table to link to motherboard
-- ALTER TABLE processor
-- ADD COLUMN motherboard_id INT,
-- ADD CONSTRAINT fk_processor_motherboard
-- FOREIGN KEY (motherboard_id) REFERENCES motherboard(id);

-- -- Add foreign key to gpus table to link to motherboard (optional, based on your schema)
-- ALTER TABLE gpus
-- ADD COLUMN motherboard_id INT,
-- ADD CONSTRAINT fk_gpus_motherboard
-- FOREIGN KEY (motherboard_id) REFERENCES motherboard(id);

